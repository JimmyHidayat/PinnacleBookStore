document.addEventListener("alpine:init", () => {
    Alpine.data("products", () => ({
        items: [
            {
                id: 1,
                author: "J.S Khairen",
                name: "Melangkah",
                image: "https://cdn.gramedia.com/uploads/items/9786020523316_Melangkah_UV_Spot_R4-1.jpg",
                category: "Biografi",
                price: 65000,
            },
            {
                id: 2,
                author: "Leila S. Chudori",
                name: "Laut Bercerita",
                image: "https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png",
                category: "Novel",
                price: 84000,
            },
            {
                id: 3,
                author: "Gege Akutami",
                name: "Jujutsu Kaisen 12",
                image: "https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg",
                category: "Komik",
                price: 55000,
            },
            {
                id: 4,
                author: "Eiichiro Oda",
                name: "One Piece 08 (2023)",
                image: "https://cdn.gramedia.com/uploads/picture_meta/2023/11/13/hfxetxlqxrvqksujtfmsk7.jpg",
                category: "Komik",
                price: 74000,
            },
            {
                id: 5,
                author: "Oh Su Hyang",
                name: "Bicara Itu Ada Seninya",
                image: "https://cdn.gramedia.com/uploads/items/9786024553920.png",
                category: "Biografi",
                price: 65000,
            },
            {
                id: 6,
                author: "Axie Oh",
                name: "The Girl who Fell Beneath the Sea",
                image: "https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/iddphd9rbufdfjabf4owuf.jpg",
                category: "Novel",
                price: 55000,
            },
            {
                id: 7,
                author: "Aoyama Gosho",
                name: "Detective Conan 103",
                image: "https://cdn.gramedia.com/uploads/picture_meta/2023/10/31/egxmfc5jkllsmadjjcklw2.jpg",
                category: "Komik",
                price: 40000,
            },
            {
                id: 8,
                author: "James Clear",
                name: "Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa",
                image: "https://cdn.gramedia.com/uploads/items/Atomic_Habits_C-FRONT_HC_-_Mockup.png",
                category: "Buku",
                price: 102400,
            },
            {
                id: 9,
                author: "Sarah Amijo",
                name: "Journal Of Joy",
                image: "https://cdn.gramedia.com/uploads/picture_meta/2023/11/10/whr7hn47apdpso8wglhrde.jpg",
                category: "Buku",
                price: 100000,
            },
            {
                id: 10,
                author: "Endo Tatsuya",
                name: "Spy X Family 10",
                image: "https://cdn.gramedia.com/uploads/picture_meta/2023/10/18/4kq5mvezwr7dmbagujtvev.jpg",
                category: "Komik",
                price: 36000,
            },
        ],
    }));
});

// konfersi ke rupiah

// const rupiah = (number) => {
//     return new Intl.NumberFormat("id-ID", {
//         style: "currency",
//         currency: "IDR",
//         minimumFractionDigits: 0,
//     }).format(number);
// };
