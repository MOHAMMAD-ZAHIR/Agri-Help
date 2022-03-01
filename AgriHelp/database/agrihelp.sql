-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 11:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrihelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `img`, `details`, `time`) VALUES
(1, 'Rice in Bangladesh', 'Rice.jpg', 'Rice is the staple food of about 135 million people of Bangladesh. It provides nearly 48% of rural employment, about two-third of total calorie supply and about one-half of the total protein intake of an average person in the country. Rice sector contributes one-half of the agricultural GDP and one-sixth of the national income in Bangladesh.\r\nAbout 75% of the total cropped area and over 80% of the total irrigated area is planted to rice. Thus, rice plays a vital role in the livelihood of the people of Bangladesh.\r\n\r\nTotal rice production in Bangladesh was about 10.59 million tons in the year 1971 when the country\'s population was only about 70.88 millions. However, the country is now producing about 25.0 million tons to feed her 135 million people. This indicates that the growth of rice production was much faster than the growth of population. This increased rice production has been possible largely due to the adoption of modern rice varieties on around 66% of the rice land which contributes to about 73% of the country\'s total rice production.\r\nHowever, there is no reason to be complacent. The population of Bangladesh is still growing by two million every year and may increase by another 30 millions over the next 20 years. Thus, Bangladesh will require about 27.26 million tons of rice for the year 2020. During this time total rice area will also shrink to 10.28 million hectares. Rice yield therefore, needs to be increased from the present 2.74 to 3.74 t/ha.\r\n', '2022-02-21 06:13:35'),
(2, 'Insect', 'insect-1.jpg', 'Insect any of the members of the class Insecta, the largest class of the phylum Arthropoda, which itself is the largest among the animal phyla. Of all the animal species so far described by science, insects account for about 85 percent; in addition to the nearly 10,000,000 insects species known, entomologists estimate that there might be more than the same number of species yet to be described.\r\n\r\nUnlike most other arthropods, an insect has three body divisions: head, thorax and abdomen, covered by a hard exoskeleton, composed in part, of the protein chitin. The exoskeleton provides protection; it also serves as the point of attachment for the muscles. The exoskeleton is moulted periodically during growth.\r\nInsects are unique because they have only three pairs of thoracic legs. Most insects bear two pairs of thoracic wings. Insects exhibit a bewildering variety of forms. They range in size from the barely visible but can be several cm in length or in wing spread. Their life spans range from a few hours to many years. They may be solitary or social. Insects feed on plants, animals and organic matters; their interactions with their food sources range from mutualism to parasitism to predation.\r\n\r\nIn many species females have an ovipositor, an abdominal appendage used for depositing eggs. Insects are instrumental in the pollination of many flowering plants (insects and flowering plants, in fact, evolved together). They promote the decay of organic material and the formation of soil; they form a major part of many food chains. Their interaction with humans is also various. Frequently, they are competitors for food either in the field or in storage. Some insects are carriers of plant, livestock or human diseases; some are nuisances; others infest and destroy buildings, furnitures and garments. On the other hand, insects produce such valuable commodities as silk, honey, wax and dyes; some are used as human food; some are valuable (parasites and predators) in controlling populations of other potentially harmful species; and some have proved useful in scientific and medical research.\r\n\r\nBangladesh is very rich in insect fauna having representatives of almost all the orders. The climatic conditions, mild winter, and bright sunshine are all favourable for insect growth and development.', '2022-02-21 06:27:18'),
(3, 'Pheromone trap', 'Pheromone.jpg', 'What Is a Pheromone?\r\nA pheromone is a specific chemical that insects and other organisms use to communicate with others of the same species – usually those of the opposite sex.\r\n\r\nOnce released, the pheromone travels through the air or water before reaching the second organism, which will often alter its behavior in response.\r\nThese chemicals are typically used to lure a mate, mimicking pheromones released by females, but some types warn of danger.\r\n\r\nPheromones are active at extremely low concentrations, just 1 millionth of an ounce.\r\n\r\nSince their discovery in 1959, chemists have learned to synthesize many in large quantities. This has enabled them to be used on a large scale – primarily in traps.\r\nThe ability to lure insects into traps has been a boon to growers and other people who face insect threats on a regular basis.\r\n\r\nPheromone traps are very sensitive, meaning they attract insects present at very low densities. They are often used to detect presence of exotic pests, or for sampling, monitoring, or to determine the first appearance of a pest in an area. They can be used for legal control, and are used to monitor the success of the Boll Weevil Eradication Program and the spread of the gypsy moth. The high species-specificity of pheromone traps can also be an advantage, and they tend to be inexpensive and easy to implement. This sensitivity is especially suited to some investigations of invasive species: Flying males are easily blown off course by winds. Rather than introducing noise, Frank et al 2013 find this can actually help detect isolated nests or populations and determine the length of time necessary between introduction and establishment. (Although any trap can answer the same questions, high sensitivity such as provided by pheromone traps does so more accurately.)\r\nHowever, it is impractical in most cases to completely remove or &#34;trap out&#34; pests using a pheromone trap. Some pheromone-based pest control methods have been successful, usually those designed to protect enclosed areas such as households or storage facilities. There has also been some success in mating disruption. In one form of mating disruption, males are attracted to a powder containing female attractant pheromones. The pheromones stick to the males&#39; bodies, and when they fly off, the pheromones make them attractive to other males. It is hoped that if enough males chase other males instead of females, egg-laying will be severely impeded.\r\nSome difficulties surrounding pheromone traps include sensitivity to bad weather, their ability to attract pests from neighboring areas, and that they generally only attract adults, although it is the juveniles in many species that are pests. They are also generally limited to one sex.', '2022-02-21 06:42:10'),
(5, 'Agricultural Technology', 'agri-tech.jpg', 'Agritech is the use of technology and technological innovation to improve the efficiency and output of agricultural processes. In other words, it is the application of technology to improve all elements of the farming and growing processes.\r\nApplications of agritech are far-ranging and encompass several different types of agricultural and technological innovations. However, the aim of all these agritech technologies is the same - an attempt to grow more food in less space and/or with fewer inputs. \r\nAgritech also saves farmers time and money, by automating tasks and replacing much of the labor needed on a farming operation - which usually constitutes the highest cost input to a farming system. ', '2022-02-21 06:49:12'),
(6, 'The Latest in Farm Robotics and Mechanization in Agritech', 'robotric-in-agri.png', 'Navigating the field and crops\r\nGPS agriculture, also known as satellite farming, is the use of GPS technology to increase farm efficiency. There are many ways GPS technology is being used in agritech to boost yields while minimizing inputs. GPS agriculture enables the real-time mapping of fields and farmland, allowing farmers to gain valuable insight into the nuances of their land. \r\n\r\nSelf-driving tractors, or driverless tractors, are tractors that can be operated without a driver. Combining these automated agritech tractors with GPS technology has presented immense advancements in precision agriculture, agritech and farming as a whole. Farmers can essentially now program their tractors and leave them to drive themselves along a field, while they are free to focus on higher-value activities.\r\n\r\nAerial farm management\r\nFarm management from above has also added a lot of value in a short amount of time to farmers across the world. Drones and other unmanned aerial vehicles (UAVs) have burst into the industry, and have a plethora of agritech applications that work to save farmers time and money, while boosting yields.\r\n\r\nDrones can be mounted with cameras to capture images of farmland from above, or identify crops that seem to be suffering from disease through data technology. The technology in this innovation can also sweep across a field releasing herbicides or pesticides to fend off weeds and pests, or to plant seeds in neat rows without farmer intervention.\r\n\r\nFarming by machines\r\n\r\nAgri robots are providing innovation and reshaping the farming industry in a big way. Aside from the obvious impact they have on reducing total farming cost of production by eliminating a great number of human labor hours from the equation, they have been benefiting a plethora of farm operation areas.\r\n\r\nNotably, agritech robots are already in use on some farms. Depending on the agritech robot, their responsibilities could include herbicide spraying, shepherding, seeding, harvesting, and more. Usually their operation is much more precise and therefore cost efficient for farmers, using 90% less input in some cases.\r\n\r\nAdditionally, their marginal cost decreases over time. In other words, while they do require a considerable capital investment upfront, these robots pay themselves back over time. Even when maintenance is factored in, these agritech robots remain an incredibly viable option for farmers who have their sights set on an increasingly automated farming operation.', '2022-02-21 06:52:52'),
(7, 'Turning terrace into thriving farm in urban Bangladesh ', 'rooftop.jpg', 'According to Smart Garden, a platform for rooftop garden design, it is not difficult to change any place with proper planning and allocation of funds. &#34;If you want to spend money to do something good, it is only a matter of time before an attractive garden is implemented.&#34;\r\n\r\nRooftop gardening is a private eco-friendly venture that provides a chance to be close the nature and to harvest fruits and vegetables in one’s hand. As the agricultural land of our country is shrinking at a rapid rate, rooftop gardening can play a vital role to preserve nature. Some people have come forward for urban agricultural development. Various television programmes, YouTube channels, social media platforms like Facebook have popularised rooftop gardening in both metropolitan and divisional city areas. However, many house owners are still in doubt regarding rooftop gardening due to funding and fear of damaging the stability of the roofs. Therefore, before considering a rooftop garden, a house owner must have a proper plan and vision; otherwise, all the efforts will end in smoke.\r\n\r\nThe unused or underused spaces of the roofs of the millions of building in Bangladesh can be beautifully decorated with well-planned gardening. Keeping in mind one’s demand and like-dislike, one can create a vegetable garden, fruit garden, flower garden, or mixed gardens on their rooftop. Fruits, vegetables, and flower mixed plants based gardens are most popular among the city gardeners. Not only in Dhaka city but also other cities, high rise buildings are being built at a rapid rate. It is estimated that over ten per cent of the roofs of Dhaka city has adopted rooftop gardening over a decade. Since the people’s awareness of climate change and to protect nature; city dwellers have started rooftop gardening as an alternative for plantation in the lands. To promote rooftop gardening, both the mayors of Dhaka City Corporations have promised a ten per cent holding tax debate. Even if half of the buildings of Dhaka city facilitate rooftop gardening on the roofs, it would be great for our environment.\r\n\r\nIn the monotonous city life, rooftop gardening provides quality recreational activities. Manual labour in the garden like watering the plants, cleaning the floor, plough the soil of the pots, making natural fertiliser increase physical activities. As people nurture the plants, they feel peaceful inside – their stress, anxiety, and fatigue lessen quite dramatically. Thus, rooftop gardening is gradually improving people’s life. Most of the city dwellers live in pigeon box where their life is heavily dependent on electronic devices, gadgets, concrete building, and vehicles. Trees are being cut down mercilessly everywhere, therefore, there are not adequate trees in urban areas to keep the balance in the environment. Rooftop gardening and small-scale veranda gardening provides people with a small opportunity to spend time with nature as trees are the heart of nature. Besides, in the age where carbide and formalin are found almost in every food product, fresh and organic fruits, vegetables are rare to find. When people obtain fruits and vegetables from their hand, their soul leaps up with joy. There is an intense amount of inner satisfaction for having fresh fruits and vegetables from one’s quest. On top of that rooftop, gardening can create a new type of biodiversity in nature in the city area. Different kinds of birds, bees, and insects can have shelters. At the same time, some passionate gardeners also breed pigeons and koel birds side by side in their garden. It provides them with both fresh and secure vegetables and meat without a doubt. Moreover, it contributes to the family’s good health and saves a lot of food costs. Rakiba Khanom, an inhabitant of Mohammadpur, Dhaka said, ‘The smell of the flowers make my day and ease my pressures from the corporate world. In the morning and after the office, I spend quality time in my rooftop garden. I enjoy my time. My whole family enjoys seasonal fruits of my garden wholeheartedly.’', '2022-02-21 07:01:35'),
(8, 'Greenhouse Agriculture: The Future of High-Tech Farming', 'green-house.jpeg', 'What is Greenhouse Farming?\r\n\r\nGreenhouse farming is the process of growing crops and vegetables in a greenhouse. Doing so typically allows farmers to increase their performance and yields, while improving the quality of products. Greenhouse farming protects crops from external threats such as certain pests and extreme weather events. \r\n\r\nGreenhouse agriculture also is a way of growing fruits and vegetables native to warmer climates in their colder counterparts - for example, growing tomatoes in a greenhouse in Norway. \r\n\r\nIn greenhouses, the light, ventilation, humidity, and temperature can all be controlled. This allows the farmer to create and provide optimal micro-ecosystems for their plants, helping them grow strong, beautiful, nutritious and tasty.\r\n\r\nGreenhouse agriculture has become very popular in all corners of the world. It originated in the 13th century, as a way to satisfy the gastronomic demands of royalty. Hundreds of years ago, greenhouse farming was also used to cultivate medicinal plants and herbs. \r\n\r\nToday, entire university teams are dedicated to the scientific study of greenhouse growing. Coupled with recent advancements in agricultural technology, greenhouse farming has become more and more productive and lucrative agribusiness venture.\r\n\r\nWell-implemented greenhouses in a controlled environment can be a low-cost solution to improving a farmer&#39;s productivity and profitability in countries with harsher climates. They also serve as an excellent vehicle for broadening one&#39;s farming or gardening horizons, and improving the quality of their crops.\r\n\r\nHowever, not all crops are suited to being grown in greenhouses. Typically, crops that do well in greenhouses are those that require warm growing conditions, or those that are quite delicate and thrive only in a very narrow range of environmental variables.', '2022-02-21 07:08:57'),
(9, 'Organic farming', 'organic-agriculture.jpeg', 'Organic farming is an agricultural system that uses fertilizers of organic origin such as compost manure, green manure, and bone meal and places emphasis on techniques such as crop rotation and companion planting. It originated early in the 20th century in reaction to rapidly changing farming practices. Certified organic agriculture accounts for 70 million hectares globally, with over half of that total in Australia. Organic farming continues to be developed by various organizations today. Biological pest control, mixed cropping and the fostering of insect predators are encouraged. Organic standards are designed to allow the use of naturally-occurring substances while prohibiting or strictly limiting synthetic substances. For instance, naturally-occurring pesticides such as pyrethrin and rotenone are permitted, while synthetic fertilizers and pesticides are generally prohibited. Synthetic substances that are allowed include, for example, copper sulfate, elemental sulfur and Ivermectin. Genetically modified organisms, nanomaterials, human sewage sludge, plant growth regulators, hormones, and antibiotic use in livestock husbandry are prohibited. Organic farming advocates claim advantages in sustainability, openness, self-sufficiency, autonomy and independence, health, food security, and food safety.', '2022-02-21 07:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `contact`, `email`, `address`, `problem`, `image`, `description`, `answer`, `date`) VALUES
(12, 'Neon', '01680793958', 'ataharishrak8@gmail.com', 'Mymensingh', 'Leaf is damaged by insects', 'photo_2021-12-30_21-43-26.jpg', 'Today, I saw that my crops leaf is damaging by a lot number of insects. I try to cure it using some medicine. But I failed to cure that. So, I need help ? ', 'You have to use Initially remove diseased plants and burry into mud.\r\nDestroy GLH through light trapping.\r\nControl GLH by spraying Melathion 57EC at 1 L/ha, MIPC 75WP at 1.12 kg/ha, etc.', '2022-02-27 04:35:24'),
(13, 'Zahir', '01778394305', 'zcodeeng@gmail.com', 'Trishal', 'Tomatos are facing insects problem', 'photo_2021-12-30_21-43-27.jpg', 'All on a sudden I saw that in my tomato garden there are some white spots as well as some insects. So, I need some help ?', 'Use disease free certified seeds.\r\nFollow early planting and early harvesting (15 Novto 15 Feb).\r\nWeed management.\r\nHaulm pulling at 80 DAP.\r\nUnder cool, foggy and wet conditions, spray should be continued with fungicides at 15 days interval. Any of the fungicides like Dithane M-45 or Indofil or Melody duo or Hamancozeb @ 0.2% at 15 days interval should be done.\r\nWhen symptoms appear, spraying with fungicides or mixture of fungicides at 7 days interval', '2022-02-28 02:58:49'),
(14, 'Eti', '01778394305', 'eti@gmail.com', 'Mymensingh', 'Late Blight in Potato', 'late-blight.jpeg', 'I saw the first symptoms of late blight in the field are small, light to dark green, circular to irregular-shaped water-soaked spots. so need help?', 'Use disease free certified seeds.\r\nFollow early planting and early harvesting (15 Novto 15 Feb).\r\nWeed management.\r\nHaulm pulling at 80 DAP.\r\nUnder cool, foggy and wet conditions, spray should be continued with fungicides at 15 days interval. Any of the fungicides like Dithane M-45 or Indofil or Melody duo or Hamancozeb @ 0.2% at 15 days interval should be done.\r\nWhen symptoms appear, spraying with fungicides or mixture of fungicides at 7 days interval', '2022-02-28 02:58:49'),
(15, 'Rahat', '01778394305', 'rahat@gmail.com', 'Trishal', 'Bacterial Leaf Streak and Black Chaff of Wheat', 'wheat-disease.jpeg', 'My crops field facing this problem. need some help.', 'Use disease free certified seeds.\r\nFollow early planting and early harvesting (15 Novto 15 Feb).\r\nWeed management.\r\nHaulm pulling at 80 DAP.\r\nUnder cool, foggy and wet conditions, spray should be continued with fungicides at 15 days interval. Any of the fungicides like Dithane M-45 or Indofil or Melody duo or Hamancozeb @ 0.2% at 15 days interval should be done.\r\nWhen symptoms appear, spraying with fungicides or mixture of fungicides at 7 days interval', '2022-02-28 02:58:49'),
(16, 'Biplop', '01778394305', 'biplop@gmail.com', 'Khulna', 'early Blight in Potato', 'early-blast.jpeg', 'need help.', 'Use disease free certified seeds.\r\nFollow early planting and early harvesting (15 Novto 15 Feb).\r\nWeed management.\r\nHaulm pulling at 80 DAP.\r\nUnder cool, foggy and wet conditions, spray should be continued with fungicides at 15 days interval. Any of the fungicides like Dithane M-45 or Indofil or Melody duo or Hamancozeb @ 0.2% at 15 days interval should be done.\r\nWhen symptoms appear, spraying with fungicides or mixture of fungicides at 7 days interval', '2022-02-28 02:58:49'),
(17, 'Farabi', '01778394305', 'farabi@gmail.com', 'Trishal', 'Crops disease', 'photo_2021-12-30_21-43-27.jpg', 'need help', 'You have to add some pesticide.', '2022-02-28 03:01:44'),
(18, 'Mijan sir', '01778394305', 'biplop@gmail.com', 'Trishal', 'Crops problem ', 'late-blight.jpeg', 'i need help', '', '2022-02-28 06:35:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
