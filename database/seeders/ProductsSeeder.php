<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'NovaBook Lite  14"',
            'description' => 'NovaBook Lite 14 is targeted at users who want simplicity; a laptop that will get the job 
            done. This makes it perfect for students, home use, or light office work. It has smooth 
            performance for browsing, emails, documents, streaming and basic multitasking. Its 
            lightweight design makes it easy to carry, while an efficient battery keeps you productive 
            throughout the day',
            'price' => '349.00',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBook Air 14"',
            'description' => 'The NovaBook Air 14” is designed for users looking for the perfect blend of speed, 
            portability and endurance. With its slim aluminium construction, combined with the 
            powerful 10-core processor, it’s perfect for students, professionals and everyday 
            multitaskers. NovaBook Air 14” performs consistently and reliably, with excellent 
            battery life',
            'price' => '549.00',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBook Pro 15"',
            'description' => 'The NovaBook Pro 15” is designed for users who need more power than provided by a 
            regular, everyday laptop, with a larger 15.6” display and a high performance 12-core 
            processor, it’s ideal for productivity, creative work, multitasking and running heavier applications.
            
            Precision-tuned cooling system and fast SSD ensure smooth performance under load, 
            while the premium chassis provides durability without extra bulk',

            'price' => '899.00',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBook Pro 16"',
            'description' => 'The NovaBook Pro 16” is targeted toward those users who need high power and a big 
            screen for productivity, design, editing or even technical workloads. Housing a 16” 
            QHD+ panel, its highly detailed and colour-accurate, making it perfect for creators and 
            professionals alike.
            It handles heavy multitasking, video editing, software development, engineering 
            applications and more. The precision aluminium chassis and enhanced cooling system 
            ensure sustained performance',
            'price' => '1399',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBook Ultra X 16"',
            'description' => 'the NovaBook Ultra X 16” represents the very pinnacle of Nova-52 engineering. Created 
            for engineers, developers and power users, this system provides workstation-level 
            performance within a sleek ultra-modern chassis.
            Equipped with a spectacular 4K UHD display, leading-edge 16-core processor and 
            dedicated graphics, Ultra X handles everything from 3D modelling and video editing to 
            advanced simulation and multitasking with ease.
            Premium materials, enhanced cooling and studio-quality audio complete this laptop as 
            a no-compromise powerhouse for those who demand the best.',
            'price' => '1899',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaPhone Lite',
            'description' => 'The NovaPhone Lite is designed to appeal to users who want a basic, reliable 
smartphone without paying a premium price. With a compact 6.1” display, smooth
performance and all day battery, its perfect for students, first time smartphone users, or 
anyone who needs an affordable yet capable everyday device.
Capture clear views with the dual-camera setup, enjoy smooth app performance and 
stay in touch with fast 4G support. This is all encased in a lightweight yet robust design.',
            'price' => '129',
            'stock_level' => '100',
            'category_id' => 2,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaPhone 1+',
            'description' => 'The NovaPhone 1+ brings premium quality to the mid-range segment, for those users 
who do not want to compromise on speed, clarity, or dependability but do not want the 
flagship price tag. Fashionably slim in profile, it also offers a smooth 90Hz display and a 
fine-tuned dual-camera setup for brilliant photography.
Powered by an efficient octa-core processor and boosted further by Android 
optimisation, the device delivers fast multitasking, gaming performance and an all-day 
battery. Featuring expandable storage and a crisp HD+ display, its ideal for 
entertainment, productivity and everyday communication',
            'price' => '249',
            'stock_level' => '100',
            'category_id' => 2,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaPhone Edge',
            'description' => 'The sleek, modern design and vibrant AMOLED display brings premium performance to 
te mid-range market with the NovaPhone Edge. Powered by the powerful NovaCore A19
processor and supported 8GB RAM, this device can smoothly operate games, 
streaming, video calls and multitasking with ease.
The advanced 50MP + 8MP dual camera system captures sharper, brighter photos in 
any environment, while the 4200mAh battery makes for all-day longevity with fast 
charging support.',
            'price' => '499',
            'stock_level' => "100",
            'category_id' => 2,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NoavaPhone Ultra 5G',
            'description' => 'NovaPhone Ultra 5G is the perfect combination of design, power and intelligent 
innovation. Created for content creators, professionals and tech enthusiasts, this smart 
device offers an immersive flagship experience from every angle.
Boasting a silky smooth 144Hz AMOLED panel, lightning-fast performance and a next generation triple camera system, the NovaPhone Ultra 5G captures and creates with 
precision.
Constructed to elevate every days productivity, entertainment and connectivity, it 
features a premium aluminium frame, long lasting battery and full 5G support.',
            'price' => '999',
            'stock_level' => '100',
            'category_id' => 2,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaPhone Ultra X',
            'description' => 'The NovaPhone Ultra X packs in a whopping 6.9-inch QHD+ AMOLED display with sleek 
curved edges, slim width and a high-grade aluminium frame. Powered by the nextgeneration NovaCore X3 processor, Ultra X handles everything from high-end gaming to 
intensive productivity with fluid ease.
Capture incredible detail with the advanced quad-camera array, enabled by enhanced 
low-light algorithms and professional-grade image stabilization. The Ultra X endures 
longer with an enormous 5200mAh battery and ultra-fast 80W Charge.',
            'price' => '1199',
            'stock_level' => '100',
            'category_id' => 2,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaTab Go 10"',
            'description' => 'The NovaTab Go 10" is designed to cater to those who want a dependable tablet without 
being too expensive.
Ideal for students, casual users, and families alike, it performs well while browsing the 
internet, streaming videos, taking online classes or playing light games. Slim and 
lightweight, this is easy to carry around, with its long-lasting battery keeping you 
connected all day long.',
            'price' => '129.99',
            'stock_level' => '100',
            'category_id' => 3,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaTab Air 11"',
            'description' => 'The NovaTab Air 11" is designed for students, creators, and everyday users who want a 
responsive, lightweight tablet without having to pay the premium prices.
Its aluminium body keeps it light yet durable, while the 90Hz display makes browsing, 
watching videos, drawing and gaming feel smooth and immersive.
The NovaTab Air 11" delivers excellent value and performance for work, study, or 
entertainment with enhanced stereo speakers and strong battery life.',
            'price' => '349.99',
            'stock_level' => '100',
            'category_id' => 3,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaTab Pro 12.4"',
            'description' => 'The NovaTab Pro 12.4" is designed for advanced users who require more power than a 
basic tablet can provide. The large, 12.4" high-resolution display showcases exceptional 
detail, while its great for digital work, multitasking, reading, note-taking and creative 
edits.
The tablet handles productivity apps, multitasking, video calls and even light creative 
workloads with ease, powered by the NovaChip X1 paired with up to 8GB RAM. Quadspeaker support ensures rich audio, while the premium slim aluminium build keeps it 
lightweight and comfortable to use.',
            'price' => '599.99',
            'stock_level' => '100',
            'category_id' => 3,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaTab Ultra 13"',
            'description' => 'The NovaTab Ultra 13" is equipped with a bright 13-inch HDR AMOLED display, high 
refresh rate, and ultra-slim design, it is apt for designers, editors, students and 
professionals.
Powered by the flagship NovaCore X2 processor and paired with up to 12GB RAM, 
complex workloads are handled easily, along with split-screen multitasking, drawing 
applications, productivity tools and high-resolution media.
A premium aluminium unibody and quad-speaker system deliver professional-grade 
audio-visual performance. With long battery life and fast charging combined, the 
NovaTab Ultra 13" is the perfect tablet for those wanting unbeatable portability and 
power',
            'price' => '899.99',
            'stock_level' => '100',
            'category_id' => 3,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaTab Ultra X 14"',
            'description' => 'The NovaTab Ultra X 14" is designed for creators, engineers, designers, and 
professionals that need maximum performance in a portable format.
Its expansive 14-inch AMOLED ProMotion display boasts stunning color accuracy and 
sharpness-perfect for editing, drawing, and multitasking.
Equipped with the powerful NovaCore X3 processor and up to 16GB of RAM, Ultra X 
handles heavy-duty productivity applications, video editing, 3D workloads, and multiwindow workflows with ease.
Equipped with a superior quad-speaker audio system, a premium aerospace-grade 
aluminum body, and a long-life battery, this tablet is truly capable of replacing a 
traditional laptop-without sacrificing portability',
            'price' => '1249.99',
            'stock_level' => '100',
            'category_id' => 3,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaStation Core',
            'description' => 'The NovaStation Core is the perfect starter desktop for students, home offices and 
everyday users who need dependable performance without a premium price tag.
Powered by the efficient NovaChip A4 Quad-Core processor, it easily handles web 
browsing, document editing, media streaming, video calls and other lightweight 
multitasking. The NovaStation Core packs plenty of storage and upgrade options, 
offering excellent value to users seeking a solid and reliable desktop for the job at hand.',
            'price' => '399.99',
            'stock_level' => '100',
            'category_id' => 4,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaStation Pro',
            'description' => 'Compared to its entry-level sibling, the NovaStation Pro represents a significant step up 
in that it can multitask more smoothly, process faster, and handle heavier workloads.
Upgraded cooling and expanded storage options make the NovaStation Pro strong and 
future-proof for those needing a desktop that will evolve with their needs. Its sleek, 
modern case and quiet operation fit perfectly in both professional and home 
environments.',
            'price' => '699.99',
            'stock_level' => '100',
            'category_id' => 4,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaStation X',
            'description' => 'The NovaStation X is designed for users who need high-performance levels in all 
scenarios, from 4K content creation and software development to competitive gaming 
and heavy multitasking.
A high-airflow chassis with several intake and exhaust fans ensures cool and quiet 
operation even under load. Featuring fast NVMe storage, expansion options, and a 
clean, modern design, the NovaStation X is the ultimate choice for serious power users 
seeking high reliability and class-leading performance.',
            'price' => '1199.99',
            'stock_level' => "100",
            'category_id' => 4,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaStation Ultra',
            'description' => 'Specifically, the NovaStation Ultra Workstation targets engineers, developers, content 
creators, 3D artists and power users by offering the ultimate performance.
A premium full-tower chassis features exceptional airflow, noise control and room for 
expansion. Liquid cooling provides stable performance during heavy loads, while the 
power supply ensures efficient and reliable power delivery.',
            'price' => '1999.99',
            'stock_level' => '100',
            'category_id' => 4,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaStation Titan X',
            'description' => 'The NovaStation Titan X is the crown jewel of the Nova desktop lineup: a machine for 
studios, research labs, engineers, and creators who demand nothing but the utmost in 
computing power.
A large liquid cooling system, premium full-tower chassis, and whisper-quiet fans 
ensure sustained peak performance under extreme loads. With ultra-fast NVMe 
storage, DDR5 memory support, and massive expandability, the Titan X is more 
powerful than many professional workstations and built to stay relevant for years.
This is the computer for those who simply cannot compromise.',
            'price' => '2999.99',
            'stock_level' => '100',
            'category_id' => 4,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBuds Lite',
            'description' => 'The NovaBuds Lite are designed for those users who desire reliable wireless audio at an 
affordable price. They are perfect for casual listening, commutes, workouts and online 
meetings.
Their ergonomic, lightweight design offers a comfortable fit for long listening sessions, 
while the compact charging case provides extended battery life. These are a practical 
choice for everyday use.',
            'price' => '29.99',
            'stock_level' => '100',
            'category_id' => 5,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaSound 1',
            'description' => 'The NovaSound One offers an affordable entry point into high-quality over-ear listening. 
Designed with comfort in mind and destined for everyday use, it features soft memoryfoam ear cushions and an adjustable, lightweight headband. It is perfect for students, 
commuters, or anyone that enjoys listening for extended periods.
Housing 40mm dynamic drivers, NovaSound One delivers clear and even audio suited 
for music, video and gaming. With both Bluetooth wireless mode and 3.5mm wired 
support, it can easily adjust to phones, computers, consoles, and tablets-even on low 
battery.',
            'price' => '39.99',
            'stock_level' => '100',
            'category_id' => 5,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBuds Pro',
            'description' => 'The NovaBuds Pro deliver a flagship-level audio experience without the premium price 
tag. Designed for commuters, gym users and music lovers, they combine Active Noise 
Cancellation with a comfortable, ergonomic fit and high-quality sound.
Recharge effortlessly at home, at work or on the go with the charging case, which 
supports USB-C fast charging and wireless charging.',
            'price' => '89.99',
            'stock_level' => '100',
            'category_id' => 5,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaSound Pro',
            'description' => 'The NovaSound Pro brings studio-grade sound and comfort to a premium over-ear 
design. Perfect for music lovers, remote workers, commuters and creators, these 
headphones combine adaptive ANC and a lightweight aluminium headband for all-day 
wear.
With up to 40 hours of battery life, fast charging and foldable hinges for portable 
storage, these are the ideal premium headphones for both work and travel.',
            'price' => '149.99',
            'stock_level' => '100',
            'category_id' => 5,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBuds Ultra',
            'description' => 'The NovaBuds Ultra represent best of Nova-52 audio engineering.
They are designed for listeners who demand the highest sound quality, combining 
adaptive noise cancellation and studio-level tuning for breathtaking sound across every 
genre. The ergonomic design creates a secure, comfortable fit and is supported by IPX5 
water resistance for workouts and outdoor use.
Equipped with a powerful 6-microphone system, it delivers flawless voice clarity even in 
noisy environments. The premium charging case offers wireless charging, extended 
battery life and ultra-fast USB-C top-ups, making NovaBuds Ultra the perfect flagship 
earbuds for travel, commutes, work, gaming, and music.',
            'price' => '179.99',
            'stock_level' => '100',
            'category_id' => 5,
            'photo_url' => null,
        ]);
    }
} 