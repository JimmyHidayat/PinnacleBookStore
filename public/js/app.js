document.addEventListener("alpine:init", () => {
    Alpine.data("products", () => ({
        items: [
            {
                id: 1,
                author: "J.S Khairen",
                name: "Melangkah",
                image: "1.jpg",
                category: "Biografi",
                price: 65000,
            },
            {
                id: 2,
                author: "Gege Akutami",
                name: "Jujutsu Kaisen 12",
                image: "2.jpg",
                category: "Komik",
                price: 55000,
            },
            {
                id: 3,
                author: "Eiichiro Oda",
                name: "One Piece 08 (2023)",
                image: "3.jpg",
                category: "Komik",
                price: 74000,
            },
            {
                id: 4,
                author: "Oh Su Hyang",
                name: "Bicara Itu Ada Seninya",
                image: "4.png",
                category: "Biografi",
                price: 65000,
            },
            {
                id: 5,
                author: "Axie Oh",
                name: "The Girl who Fell Beneath the Sea",
                image: "5.jpg",
                category: "Novel",
                price: 55000,
            },
        ],
    }));

    Alpine.store("cart", {
        items: [],
        total: 0,
        quantity: 0,
        add(newItem) {
            // cek apakah item sudah ada di cart
            const cartItem = this.items.find((item) => item.id === newItem.id);

            // jika item belum ada di cart
            if (!cartItem) {
                this.items.push({
                    ...newItem,
                    quantity: 1,
                    total: newItem.price,
                });
                this.quantity++;
                this.total += newItem.price;
            } else {
                this.items = this.items.map((item) => {
                    if (item.id !== newItem.id) {
                        return item;
                    } else {
                        item.quantity++;
                        item.total = item.price * item.quantity;
                        this.quantity++;
                        this.total += item.price;
                        return item;
                    }
                });
            }
        },
        remove(id) {
            const cartItem = this.items.find((item) => item.id === id);

            if (cartItem.quantity > 1) {
                this.items = this.items.map((item) => {
                    if (item.id !== id) {
                        return item;
                    } else {
                        item.quantity--;
                        item.total = item.price * item.quantity;
                        this.quantity--;
                        this.total -= item.price;
                        return item;
                    }
                });
            } else if (cartItem.quantity === 1) {
                this.items = this.items.filter((item) => item.id !== id);
                this.quantity--;
                this.total -= cartItem.price;
            }
        },
    });
});

// Form Validation

const checkoutButton = document.querySelector(".checkout-button");
checkoutButton.disabled = true;

const form = document.querySelector("#checkoutForm");

form.addEventListener("keyup", function () {
    for (let i = 0; i < form.elements.length; i++) {
        if (form.elements[i].value.length !== 0) {
            checkoutButton.classList.remove("disabled");
            checkoutButton.classList.add("disabled");
        } else {
            return false;
        }
    }
    checkoutButton.disabled = false;
    checkoutButton.classList.remove("disabled");
});

checkoutButton.addEventListener("click", async function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const data = new URLSearchParams(formData);
    const objData = Object.fromEntries(data);
    // const message = formatMessage(objData);
    // window.open(
    //     "http://wa.me/6285797983833?text=" + encodeURIComponent(message)
    // );

    // Meminta transaction token mengunakan ajax / fetch

    try {
        const response = await fetch("php/placeOrder.php", {
            method: "POST",
            body: data,
        });

        const token = await response.text();
        // console.log(token);
        window.snap.pay(token);
    } catch (err) {
        console.log(err.message);
    }
});

// Format pesan whatsapp

const formatMessage = (obj) => {
    return `Data Customer
        Nama : ${obj.name}
        Email : ${obj.email}
        No Hp : ${obj.phone}
    Data Pesanan
        ${JSON.parse(obj.items).map(
            (item) =>
                `${item.name} (${item.quantity} x ${rupiah(item.total)}) \n`
        )}
    TOTAL : ${rupiah(obj.total)}
    Terima Kasih.`;
};

// konfersi ke rupiah

// const rupiah = (number) => {
//     return new Intl.NumberFormat("id-ID", {
//         style: "currency",
//         currency: "IDR",
//         minimumFractionDigits: 0,
//     }).format(number);
// };
