<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'name' => 'ASUS ROG Strix G17',
        //     'price' => '1200.17',
        //     'description' => 'The ASUS ROG Strix G17 G713PV-HX054W is a powerful
        //                         17.3-inch gaming laptop equipped with an AMD Ryzen 9 processor and an NVIDIA GeForce RTX 4060 graphics card. With 16GB of RAM and a 1TB SSD storage capacity, this laptop provides ample power and storage space for intensive gaming and multitasking applications. Its 1920 x 108
        //                         0-pixel Full HD display with a 144Hz refresh rate ensures smooth and vivid image reproduction.',
        //     'brand' => 'ASUS',
        //     'image' => 'public/uploads/Asus.jpg'
        // ]);

        // Product::create([
        //     'name' => 'The Culture Map Book',
        //     'price' => '5.7',
        //     'description' => 'An international business expert helps you understand and navigate cultural differences in
        // this insightful and practical guide, perfect for both work and personal life.',
        //     'brand' => 'Kelkoo',
        //     'image' => 'public/uploads/Culture_Map_Book.jpg'
        // ]);

        // Product::create([
        //     'name' => 'Casual Cotton Shirt',
        //     'price' => 49.99,
        //     'description' => 'A stylish and breathable shirt, perfect for casual outings.',
        //     'brand' => 'Levi'
        // ]);

        // Product::create([
        //     'name' => 'Slim Fit Jeans',
        //     'price' => 59.99,
        //     'description' => 'Durable and comfortable denim jeans with a slim fit design.',
        //     'brand' => 'Wrangler'
        // ]);
        // Product::create([
        //     'name' => 'Leather Jacket',
        //     'price' => 199.99,
        //     'description' => 'Premium leather jacket, ideal for a modern and edgy look.',
        //     'brand' => 'Harley Davidson'
        // ]);
        // Product::create([
        //     'name' => 'Polo Shirt',
        //     'price' => 39.99,
        //     'description' => 'Classic polo shirt with soft fabric for daily wear.',
        //     'brand' => 'Ralph Lauren'
        // ]);
        // Product::create([
        //     'name' => 'Formal Suit',
        //     'price' => 299.99,
        //     'description' => 'Elegant two-piece suit perfect for business meetings and formal events.',
        //     'brand' => 'Hugo Boss'
        // ]);
        // Product::create([
        //     'name' => 'Summer Floral Dress',
        //     'price' => 79.99,
        //     'description' => 'Light and flowy dress with floral patterns, ideal for summer days.',
        //     'brand' => 'Zara'
        // ]);
        // Product::create([
        //     'name' => 'Denim Jacket',
        //     'price' => 89.99,
        //     'description' => 'A timeless denim jacket with a relaxed fit.',
        //     'brand' => 'Levi'
        // ]);
        // Product::create([
        //     'name' => 'Maxi Skirt',
        //     'price' => 49.99,
        //     'description' => 'Flowing maxi skirt with an elegant design for casual or formal wear.',
        //     'brand' => 'Mango'
        // ]);
        // Product::create([
        //     'name' => 'Slim Fit Jeans',
        //     'price' => 59.99,
        //     'description' => 'Durable and comfortable denim jeans with a slim fit design.',
        //     'brand' => 'Wrangler'
        // ]);


        //
        Product::create([
            "name" => "Fjallraven - Foldsack",
            "price" => 109.95,
            "description" => "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday",
            "image" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Mens T-Shirts ",
            "price" => 22.3,
            "description" => "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
            "image" => "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Mens Cotton Jacket",
            "price" => 55.99,
            "description" => "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.",
            "image" => "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Mens Casual Slim Fit",
            "price" => 15.99,
            "description" => "The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.",
            "image" => "https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "John Hardy Women's",
            "price" => 695,
            "description" => "From our Legends Collection, the Naga was inspired by the mythical water dragon that protects the ocean's pearl. Wear facing inward to be bestowed with love and abundance, or outward for protection.",
            "image" => "https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Solid Gold Petite Micropave ",
            "price" => 168,
            "description" => "Satisfaction Guaranteed. Return or exchange any order within 30 days.Designed and sold by Hafeez Center in the United States. Satisfaction Guaranteed. Return or exchange any order within 30 days.",
            "image" => "https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "White Gold Plated Princess",
            "price" => 9.99,
            "description" => "Classic Created Wedding Engagement Solitaire Diamond Promise Ring for Her. Gifts to spoil your love more for Engagement, Wedding, Anniversary, Valentine's Day...",
            "image" => "https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Rose Gold Double",
            "price" => 10.99,
            "description" => "Rose Gold Plated Double Flared Tunnel Plug Earrings. Made of 316L Stainless Steel",
            "image" => "https://fakestoreapi.com/img/51UDEzMJVpL._AC_UL640_QL65_ML3_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "WD 2TB",
            "price" => 64,
            "description" => "USB 3.0 and USB 2.0 Compatibility Fast data transfers Improve PC Performance High Capacity; Compatibility Formatted NTFS for Windows 10, Windows 8.1, Windows 7; Reformatting may be required for other operating systems; Compatibility may vary depending on user’s hardware configuration and operating system",
            "image" => "https://fakestoreapi.com/img/61IBBVJvSDL._AC_SY879_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "SanDisk",
            "price" => 109,
            "description" => "Easy upgrade for faster boot up, shutdown, application load and response (As compared to 5400 RPM SATA 2.5” hard drive; Based on published specifications and internal benchmarking tests using PCMark vantage scores) Boosts burst write performance, making it ideal for typical PC workloads The perfect balance of performance and reliability Read/write speeds of up to 535MB/s/450MB/s (Based on internal testing; Performance may vary depending upon drive capacity, host device, OS and application.)",
            "image" => "https://fakestoreapi.com/img/61U7T1koQqL._AC_SX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Silicon",
            "price" => 109,
            "description" => "3D NAND flash are applied to deliver high transfer speeds Remarkable transfer speeds that enable faster bootup and improved overall system performance. The advanced SLC Cache Technology allows performance boost and longer lifespan 7mm slim design suitable for Ultrabooks and Ultra-slim notebooks. Supports TRIM command, Garbage Collection technology, RAID, and ECC (Error Checking & Correction) to provide the optimized performance and enhanced reliability.",
            "image" => "https://fakestoreapi.com/img/71kWymZ+c+L._AC_SX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "WD 4TB Gaming external Hard Drive",
            "price" => 114,
            "description" => "Expand your PS4 gaming experience, Play anywhere Fast and easy, setup Sleek design with high capacity, 3-year manufacturer's limited warranty",
            "image" => "https://fakestoreapi.com/img/61mtL65D4cL._AC_SX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Acer SB220Q bi 21.5 inches Full HD (1920 x 1080) IPS Ultra-Thin",
            "price" => 599,
            "description" => "21. 5 inches Full HD (1920 x 1080) widescreen IPS display And Radeon free Sync technology. No compatibility for VESA Mount Refresh Rate: 75Hz - Using HDMI port Zero-frame design | ultra-thin | 4ms response time | IPS panel Aspect ratio - 16: 9. Color Supported - 16. 7 million colors. Brightness - 250 nit Tilt angle -5 degree to 15 degree. Horizontal viewing angle-178 degree. Vertical viewing angle-178 degree 75 hertz",
            "image" => "https://fakestoreapi.com/img/81QpkIctqPL._AC_SX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Samsung 49-Inch CHG90 144Hz Screen QLED ",
            "price" => 999.99,
            "description" => "49 INCH SUPER ULTRAWIDE 32:9 CURVED GAMING MONITOR with dual 27 inch screen side by side QUANTUM DOT (QLED) TECHNOLOGY, HDR support and factory calibration provides stunningly realistic and accurate color and contrast 144HZ HIGH REFRESH RATE and 1ms ultra fast response time work to eliminate motion blur, ghosting, and reduce input lag",
            "image" => "https://fakestoreapi.com/img/81Zt42ioCgL._AC_SX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "BIYLACLESEN Winter Coats",
            "price" => 56.99,
            "description" => "Note:The Jackets is US standard size, Please choose size as your usual wear Material: 100% Polyester; Detachable Liner Fabric: Warm Fleece. Detachable Functional Liner: Skin Friendly, Lightweigt and Warm.Stand Collar Liner jacket, keep you warm in cold weather. Zippered Pockets: 2 Zippered Hand Pockets, 2 Zippered Pockets on Chest (enough to keep cards or keys)and 1 Hidden Pocket Inside.Zippered Hand Pockets and Hidden Pocket keep your things secure. Humanized Design: Adjustable and Detachable Hood and Adjustable cuff to prevent the wind and water,for a comfortable fit. 3 in 1 Detachable Design provide more convenience, you can separate the coat and inner as needed, or wear it together. It is suitable for different season and help you adapt to different climates",
            "image" => "https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Lock and Jacket",
            "price" => 29.95,
            "description" => "100% POLYURETHANE(shell) 100% POLYESTER(lining) 75% POLYESTER 25% COTTON (SWEATER), Faux leather material for style and comfort / 2 pockets of front, 2-For-One Hooded denim style faux leather jacket, Button detail on waist / Detail stitching at sides, HAND WASH ONLY / DO NOT BLEACH / LINE DRY / DO NOT IRON",
            "image" => "https://fakestoreapi.com/img/81XH0e8fefL._AC_UY879_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Rain Jacket Women Raincoats",
            "price" => 39.99,
            "description" => "Lightweight perfet for trip or casual wear---Long sleeve with hooded, adjustable drawstring waist design. Button and zipper front closure raincoat, fully stripes Lined and The Raincoat has 2 side pockets are a good size to hold all kinds of things, it covers the hips, and the hood is generous but doesn't overdo it.Attached Cotton Lined Hood with Adjustable Drawstrings give it a real styled look.",
            "image" => "https://fakestoreapi.com/img/71HblAHs5xL._AC_UY879_-2.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "MBJ Women's Solid Short Sleeve Boat Neck V ",
            "price" => 9.85,
            "description" => "95% RAYON 5% SPANDEX, Made in USA or Imported, Do Not Bleach, Lightweight fabric with great stretch for comfort, Ribbed on sleeves and neckline / Double stitching on bottom hem",

            "image" => "https://fakestoreapi.com/img/71z3kpMAYsL._AC_UY879_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "Opna Women's Moisture",
            "price" => 7.95,
            "description" => "100% Polyester, Machine wash, 100% cationic polyester interlock, Machine Wash & Pre Shrunk for a Great Fit, Lightweight, roomy and highly breathable with moisture wicking fabric which helps to keep moisture away, Soft Lightweight Fabric with comfortable V-neck collar and a slimmer fit, delivers a sleek, more feminine silhouette and Added Comfort",

            "image" => "https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg",
            "brand" => "Adidas"
        ]);
        Product::create([
            "name" => "DANVOUY Womens Cotton Short",
            "price" => 12.99,
            "description" => "95%Cotton,5%Spandex, Features: Casual, Short Sleeve, Letter Print,V-Neck,Fashion Tees, The fabric is soft and has some stretch., Occasion: Casual/Office/Beach/School/Home/Street. Season: Spring,Summer,Autumn,Winter.",

            "image" => "https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg",
            "brand" => "Adidas"
        ]);

        
        Product::create([
            "name" => "HP Victus 15 Gaming Laptop",
            "price" => 869.23,
            "description" => "HP Victus 15 Gaming Laptop, 15.6 FHD 144Hz Display, AMD Ryzen 5 7535HS, 64GB DDR5 RAM, 2TB PCIe M.2 SSD, NVIDIA GeForce RTX",

            "image" => "https://m.media-amazon.com/images/I/71juF7A+MsL._AC_UY327_FMwebp_QL65_.jpg",
            "brand" => "HP"
        ]);
        Product::create([
            "name" => "MSI Thin GF63 Gaming Laptop",
            "price" => 753.12,
            "description" => "MSI Thin GF63 15.6 144Hz Gaming Laptop: 12th Gen Intel Core i7, NVIDIA GeForce RTX 4050, 16GB DDR4, 512GB NVMe SSD",

            "image" => "https://m.media-amazon.com/images/I/71JqyTBiXrL.__AC_SX300_SY300_QL70_FMwebp_.jpg",
            "brand" => "MSI"
        ]);
        Product::create([
            "name" => "ASUS TUF Gaming F15 (2023) Gaming Laptop",
            "price" => 812.39,
            "description" => "ASUS TUF Gaming F15 (2023) Gaming Laptop, 15.6” FHD 144Hz, 100% sRGB Display, GeForce RTX 4050, Intel Core i5-13500H, 16GB DDR4.",

            "image" => "https://m.media-amazon.com/images/I/71v0BQo8T8L._AC_UY327_FMwebp_QL65_.jpg",
            "brand" => "ASUS"
        ]);
        Product::create([
            "name" => "ASUS ROG Strix G16 Gaming Laptop",
            "price" => 1212.39,
            "description" => "ASUS ROG Strix G16 Gaming Laptop, 15.6” FHD 144Hz, 100% sRGB Display, GeForce RTX 4050, Intel Core i5-13500H, 16GB DDR4.",

            "image" => "https://m.media-amazon.com/images/I/71v0BQo8T8L._AC_SX679_.jpg",
            "brand" => "ASUS"
        ]);
        Product::create([
            "name" => "ASUS TUF Gaming F15 (2023) Gaming Laptop",
            "price" => 1252.00,
            "description" => "ASUS TUF Gaming F15 (2023) Gaming Laptop, 15.6” FHD 144Hz, 100% sRGB Display, GeForce RTX 4050, Intel Core i5-13500H, 16GB DDR4.",

            "image" => "https://m.media-amazon.com/images/I/81gK08T6tYL.__AC_SX300_SY300_QL70_FMwebp_.jpg",
            "brand" => "ASUS"
        ]);
        Product::create([
            "name" => "ASUS TUF Gaming F15 (2023) Gaming Laptop",
            "price" => 1162.13,
            "description" => "ASUS TUF Gaming F15 (2023) Gaming Laptop, 15.6” FHD 144Hz, 100% sRGB Display, GeForce RTX 4050, Intel Core i5-13500H, 16GB DDR4.",

            "image" => "https://m.media-amazon.com/images/I/71YHDlUYklL._AC_UY327_FMwebp_QL65_.jpg",
            "brand" => "ASUS"
        ]);
        Product::create([
            "name" => "ASUS TUF Gaming F15 (2023) Gaming Laptop",
            "price" => 1012.2,
            "description" => "ASUS TUF Gaming F15 (2023) Gaming Laptop, 15.6” FHD 144Hz, 100% sRGB Display, GeForce RTX 4050, Intel Core i5-13500H, 16GB DDR4.",

            "image" => "https://m.media-amazon.com/images/I/71tIK0NBkKL._AC_UY327_FMwebp_QL65_.jpg",
            "brand" => "ASUS"
        ]);
        Product::create([
            "name" => "HP Victus Gaming Laptop",
            "price" => 1123.77,
            "description" => "HP Victus Gaming Laptop, 16.1 FHD 144Hz Display, AMD Ryzen 7-8845HS(8 cores), NVIDIA GeForce RTX 4070, 32GB DDR5 RAM, 2TB SSD",

            "image" => "https://m.media-amazon.com/images/I/71sVGxgx89L._AC_SX679_.jpg",
            "brand" => "HP"
        ]);
        Product::create([
            "name" => "Dell 2023 Inspiron Laptop",
            "price" => 930.27,
            "description" => "Dell 2023 Inspiron Laptop, 16.1 FHD 144Hz Display, AMD Ryzen 7-8845HS(8 cores), NVIDIA GeForce RTX 4070, 32GB DDR5 RAM, 2TB SSD",

            "image" => "https://m.media-amazon.com/images/I/61KPrzQ14GL._AC_SX679_.jpg",
            "brand" => "DELL"
        ]);
        Product::create([
            "name" => "Dell 2022 Inspiron 35111 Laptop",
            "price" => 312.8,
            "description" => "Dell 2022 Inspiron 3511 Laptopp, 16.1 FHD 144Hz Display, AMD Ryzen 7-8845HS(8 cores), NVIDIA GeForce RTX 4070, 32GB DDR5 RAM, 2TB SSD",

            "image" => "https://m.media-amazon.com/images/I/71I8QUVcEpL._AC_UY327_FMwebp_QL65_.jpg",
            "brand" => "DELL"
        ]);



        Product::create([
            "name" => "Armitron Sport Women's Digital Watch",
            "price" => 3.55,
            "description" => "Armitron Sport Women's Digital Chronograph Resin Strap Watch, 45/7012",

            "image" => "https://m.media-amazon.com/images/I/71j0nFQ4NqL._AC_SY879_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Timex Men's Easy Reader Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/710yuVTQdKL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Casio DW9052 Series Men’s Digital Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/71KhpkIzGmL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Casio G-Shock GWM5610-1 Men's Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/81dvG+N1teL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Invicta Men's Pro Diver Collection Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/61+M-3bg4pL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Fossil Nate Men's Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/91wuW8pX5fL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Fossil Nate Men's Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/91JK8xNmoCL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Fossil Nate Men's Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/71jDbYB7y8L._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Fossil Nate Men's Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/613kS8sIRcL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);
        Product::create([
            "name" => "Fossil Nate Men's Watch",
            "price" => 7.8,
            "description" => "Digital Watch",

            "image" => "https://m.media-amazon.com/images/I/91KRgOuTFDL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "Armitron"
        ]);



        Product::create([
            "name" => "Nerlion Messenger Bag for Men",
            "price" => 3.55,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/71RH6m58MDL._AC_SY695_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "MATEIN Business Laptop Backpack",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/71iS+mJSbGL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "Pendleton Men's Crossbody",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/61Ons69gBWL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "THE NORTH FACE Borealis Sling Bag",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/61Khc+P9oLL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "Lacoste Unisex Neocroc Shoulder Bag",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/81y9dOYN4IL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "KROSER Laptop Bag Premium Laptop Briefcase",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/81ikgqLxSbL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "FashionPuzzle Small Crescent Shoulder Bag Underarm Purse",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/912zP+qy8IL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "Beatfull Designer Bee Crossbody Purse",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/81VtnTwMIML._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "BAGSMART Tote Bag for Women",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/81IC4ifUr0L._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);
        Product::create([
            "name" => "Travelon Anti-Theft Heritage Crossbody Bag",
            "price" => 7.8,
            "description" => "Bag",

            "image" => "https://m.media-amazon.com/images/I/81QgQd4-9jL._AC_UL480_FMwebp_QL65_.jpg",
            "brand" => "ESTARER"
        ]);



    }
}
