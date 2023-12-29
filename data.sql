DELETE FROM image;
DELETE FROM review;
DELETE FROM user;
DELETE FROM book;

-- BOOK
INSERT INTO book(id, title, description, price, format) VALUES (1, 'Prophet Song','On a dark, wet evening in Dublin, scientist and mother-of-four Eilish Stack answers her front door to find the GNSB on her step. Two officers from Irelands newly formed secret police are here to interrogate her husband, a trade unionist. Ireland is falling apart. The country is in the grip of a government turning towards tyranny and Eilish can only watch helplessly as the world she knew disappears. When first her husband and then her eldest son vanish, Eilish finds herself caught within the nightmare logic of a collapsing society. How far will she go to save her family? And what - or who - is she willing to leave behind? Exhilarating, terrifying and propulsive, Prophet Song is a work of breathtaking originality, offering a devastating vision of a country at war and a deeply human portrait of a mothers fight to hold her family together.',17,'book');
INSERT INTO book(id, title, description, price, format) VALUES (2, 'Murdle','The utterly addictive murderous puzzle book for armchair detectives everywhere. From G. T. Karber, the creator of the popular online daily mystery game at www.Murdle.com, comes this fiendishly compulsive and absolutely killer collection of 100 original murder mystery logic puzzles. Join Deductive Logico and pit your wits against a slew of dastardly villains in order to discover: - Who committed the ghastly deed? - What weapon was used to dispatch the victim? - Where did the dreadful demise occur? These humorous mini-mystery puzzles challenge you to find whodunit, how, where, and why. Examine the clues, interview the witnesses, and use the power of deduction to complete the grid and catch the culprit. Packed with illustrations, codes, and maps, this is the must-have detective casebook for the secret sleuth in everyone. Are you the next Miss Marple or Hercule Poirot? Youll soon find out, if you dare to Murdle!',15,'book');
INSERT INTO book(id, title, description, price, format) VALUES (3, 'Impossible Creatures','It was a very fine day, until something tried to eat him. A boy called Christopher is visiting his reclusive grandfather when he witnesses an avalanche of mythic creatures come tearing down the hill. This is how Christopher learns that his grandfather is the guardian of one of the ways between the non-magical world and a place called the Archipelago: a cluster of magical islands, where all the creatures we tell of in myth live and breed and thrive alongside humans. They have been protected for thousands of years from being discovered; now, terrifyingly, the protection has worn thin, and creatures are breaking through. Then a girl, Mal, appears in Christopher’s world. She is in possession of a flying coat, is being pursued by a killer, and is herself in pursuit of a baby griffin. Mal, Christopher and the griffin embark on an urgent quest across the wild splendour of the Archipelago, where sphinxes hold secrets and centaurs do murder, to find the truth – with unimaginable consequences for both their worlds. Together the two must face the problem of power, and of knowledge, and of what love demands of us.',15,'book');
INSERT INTO book(id, title, description, price, format) VALUES (4, 'Yellowface','Athena Liu is a literary darling and June Hayward is literally nobody. White lies... When Athena dies in a freak accident, June steals her unpublished manuscript and publishes it as her own under the ambiguous name Juniper Song. Dark humour... But as evidence threatens June’s stolen success, she will discover exactly how far she will go to keep what she thinks she deserves. Deadly consequences… What happens next is entirely everyone else’s fault.',15,'book');
INSERT INTO book(id, title, description, price, format) VALUES (5, 'Days at the Morisaki Bookshop','Hidden in Jimbocho, Tokyo is a booklovers paradise. On a quiet corner in an old wooden building lies a shop filled with hundreds of second-hand books. Twenty-five-year-old Takako has never liked reading, although the Morisaki bookshop has been in her family for three generations. It is the pride and joy of her uncle Satoru, who has devoted his life to the bookshop since his wife Momoko left him five years earlier. When Takakos boyfriend reveals hes marrying someone else, she reluctantly accepts her eccentric uncles offer to live rent-free in the tiny room above the shop. Hoping to nurse her broken heart in peace, Takako is surprised to encounter new worlds within the stacks of books lining the Morisaki bookshop. As summer fades to autumn, Satoru and Takako discover they have more in common than they first thought. The Morisaki bookshop has something to teach them both about life, love, and the healing power of books.',10,'book');
INSERT INTO book(id, title, description, price, format) VALUES (6, 'Keira & Me','Let national treasure Professor Noel Fitzpatrick - the Supervet - break your heart and put it back together again in this beautiful new Christmas story. With you by my side, just doing my best was the best thing to do. Keira is a very special dog. She held the key to Noels heart from the moment he first met her. Thats because Keira doesnt judge. She can see beyond the superficial things that often divide us. When Noel struggles, Keira is there to remind him he need only do his best, with integrity and kindness, and a will to do the right thing. When he sees only darkness, Keira is ready to lend a paw and lift him back into the light. Based on the real Keira and Noel and their life together, Keira & Me captures the true, powerful bond between human and animal. Inspiring, healing and a heartfelt celebration of love, this beautifully illustrated fable teaches us all how to embrace the ups with the downs, the joy and the sorrow, that make up a life. For animal lovers everywhere, or anyone who needs a little comfort this Christmas, Keira & Me promises to break your heart - and put it back together again.',14,'book');
INSERT INTO book(id, title, description, price, format) VALUES (7, 'Good Material','Every relationship has one beginning. This one has two endings. Andy loves Jen. Jen loved Andy. And he cant work out why she stopped. Now he is... 1. Without a home 2. Waiting for his stand-up career to take off 3. Wondering why everyone else around him seems to have grown up while he wasnt looking Set adrift on the sea of heartbreak at a time when everything he thought he knew about women, and flat-sharing, and his friendships has transformed beyond recognition, Andy clings to the idea of solving the puzzle of their broken relationship. Because if he can find the answer to that, then maybe Jen can find her way back to him. Andy still has a lot to learn, not least his ex-girlfriends side of the story. From the bestselling author of Ghosts and Everything I Know About Love: a sharply funny, beautifully observed and exquisitely relatable story of heartbreak and friendship, and how to survive both.',19,'book');
INSERT INTO book(id, title, description, price, format) VALUES (8, 'Tomorrow, and Tomorrow, and Tomorrow','Sam and Sadie meet in a hospital in 1987. Playing together brings joy, escape, fierce competition - and a special friendship. Then, all too soon, that time is over and they must return to their normal lives. When the pair spot each other eight years later in a crowded train station the spark is immediate, and together they get to work on what they love - creating virtual worlds to delight, challenge and immerse. Their collaborations make them global superstars but along with success, money and fame come betrayal and tragedy. Tomorrow, and Tomorrow, and Tomorrow takes us on a dazzling imaginative quest, examining identity, creativity and our need to connect.',9,'book');
INSERT INTO book(id, title, description, price, format) VALUES (9, 'How They Broke Britain','THE REVEALING, DEFINING ACCOUNT OF THE DARK NETWORK THAT BROKE OUR COUNTRY. An exceptional broadcaster - Guardian | Consistently, forensically, brilliant - Emily Maitlis Something has gone really wrong in Britain. Our economy has tanked, our freedoms are shrinking, and social divisions are growing. Our politicians seem most interested in their own careers, and much of the media only make things worse. We are living in a country almost unrecognisable from the one that existed a decade ago. But whose fault is it really? Who broke Britain and how did they do it? Bold and incisive as ever, James OBrien reveals the shady network of influence that has created a broken Britain of strikes, shortages and scandals. He maps the web connecting dark think tanks to Downing Street, the journalists involved in selling it to the public and the media bosses pushing their own agendas. Over ten chapters, each focusing on a particular person complicit in the downfall, James OBrien reveals how a select few have conspired - sometimes by incompetence, sometimes by design - to bring Britain to its knees.',20,'book');
INSERT INTO book(id, title, description, price, format) VALUES (10, 'GHOSTS: The Button House Archives','The comic companion to the BBC sitcom GHOSTS, perfect for all the family. Everybody leaves a trace. The ghosts of Button House may have been dead a long time - some of them a very long time - but they have all left their mark on the world (even if, in Robins case, that mark is just a handprint on the wall of a cave). Gathered together in this volume is a treasure trove of unearthed cuttings, original records and rare artefacts that explore the unseen lives of those who died at Button House: from Thomass love letters to Pats Summer Camp Rap, and from Julians campaign promises to Lady Buttons Rules of Etiquette. There are even documents dictated to the one person who can see and hear the ghosts: Alison Cooper. Written by the shows creators - Mathew Baynton, Simon Farnaby, Martha Howe-Douglas, Jim Howick, Laurence Rickard and Ben Willbond - this eclectic archive is a unique chance to discover more about the beloved ghosts of Button House. Thank be to Moonah! A book for all the family, it is as warm-spirited and deliriously daft as the series itself.',20,'book');
INSERT INTO book(id, title, description, price, format) VALUES (11, 'The Satsuma Complex','My name is Gary. I’m a thirty-year-old legal assistant with a firm of solicitors in London. To describe me as anonymous would be unfair but to notice me other than in passing would be a rarity. I did make a good connection with a girl, but that blew up in my face and smacked my arse with a fish slice. Gary Thorn goes for a pint with a work acquaintance called Brendan. When Brendan leaves early, Gary meets a girl in the pub. He doesn’t catch her name, but falls for her anyway. When she suddenly disappears without saying goodbye, all Gary has to remember her by is the book she was reading: The Satsuma Complex. But when Brendan goes missing, Gary needs to track down the girl he now calls Satsuma to get some answers. And so begins Gary’s quest, through the estates and pie shops of South London, to finally bring some love and excitement into his unremarkable life… A page-turning story with a cast of unforgettable characters, The Satsuma Complex is the brilliantly funny first novel by bestselling author and comedian Bob Mortimer.',8,'book');
INSERT INTO book(id, title, description, price, format) VALUES (12, 'Lessons in Chemistry','Your ability to change everything - including yourself - starts here - Elizabeth Zott Chemist Elizabeth Zott is not your average woman. In fact, Elizabeth Zott would be the first to point out that there is no such thing. But its the early 1960s and her all-male team at Hastings Research Institute take a very unscientific view of equality. Except for one: Calvin Evans; the lonely, brilliant, Nobel-prize nominated grudge-holder who falls in love with - of all things - her mind. True chemistry results. But like science, life is unpredictable. Which is why a few years later, Elizabeth Zott finds herself not only a single mother, but the reluctant star of Americas most beloved cooking show Supper at Six. Elizabeths unusual approach to cooking (combine one tablespoon acetic acid with a pinch of sodium chloride) proves revolutionary. But as her following grows, not everyone is happy. Because as it turns out, Elizabeth Zott isnt just teaching women to cook. Shes daring them to change the status quo. Meet the unconventional, uncompromising Elizabeth Zott. Read an extract from Lessons in Chemistry on the Waterstones Blog',9,'book');
INSERT INTO book(id, title, description, price, format) VALUES (13, 'The Ballad of Songbirds and Snakes (A Hunger Games Novel)','Ambition will fuel him. Competition will drive him. But power has its price. It is the morning of the reaping that will kick off the tenth annual Hunger Games. In the Capitol, eighteen-year-old Coriolanus Snow is preparing for his one shot at glory as a mentor in the Games. The once-mighty house of Snow has fallen on hard times, its fate hanging on the slender chance that Coriolanus will be able to outcharm, outwit, and outmaneuver his fellow students to mentor the winning tribute. The odds are against him. He’s been given the humiliating assignment of mentoring the female tribute from District 12, the lowest of the low. Their fates are now completely intertwined — every choice Coriolanus makes could lead to favor or failure, triumph or ruin. Inside the arena, it will be a fight to the death. Outside the arena, Coriolanus starts to feel for his doomed tribute . . . and must weigh his need to follow the rules against his desire to survive no matter what it takes.',9,'book');
INSERT INTO book(id, title, description, price, format) VALUES (14, 'Really Good, Actually','I feel like when you get a divorce everyones wondering how you ruined it all, what made you so unbearable to be with. If your husband dies, at least people feel bad for you. Maggies marriage has ended just 608 days after it started, but shes fine - shes doing really good, actually. Sure, shes alone for the first time in her life, cant afford her rent and her obscure PhD is going nowhere . . . but at the age of twenty-nine, Maggie is determined to embrace her new status as a Surprisingly Young Divorcee (TM). Soon shes taking up sadness hobbies and getting back out there, sex-wise, oversharing in the group chat and drinking with her high-intensity new divorced friend Amy. As Maggie throws herself headlong into the chaos of her first year of divorce, she finds herself questioning everything, including: Why do we still get married? Did I fail before I even got started? How many Night Burgers until Im happy?',9,'book');
INSERT INTO book(id, title, description, price, format) VALUES (15, 'Eve: How The Female Body Drove 200 Million Years of Human Evolution','How did wet nurses drive civilization? Are women always the weaker sex? Is sexism useful for evolution? And are our bodies at war with our babies? In Eve, Cat Bohannon answers questions scientists should have been addressing for decades. With boundless curiosity and sharp wit, she covers the past 200 million years to explain the specific science behind the development of the female sex. Eve is not only a sweeping revision of human history, its an urgent and necessary corrective for a world that has focused primarily on the male body for far too long. Bohannons findings, including everything from the way C-sections in the industrialized world are rearranging womens pelvic shape to the surprising similarities between pus and breast milk, will completely change what you think you know about evolution and why Homo sapiens have become such a successful and dominant species, from tool use to city building to the development of language.',22,'book');
INSERT INTO book(id, title, description, price, format) VALUES (16, 'Babel: Or the Necessity of Violence: an Arcane History of the Oxford Translators’ Revolution','A new dark academic fantasy by the New York Times bestselling author of The Poppy War. Traduttore, traditore: An act of translation is always an act of betrayal. Oxford, 1836. The city of dreaming spires. It is the centre of all knowledge and progress in the world. And at its centre is Babel, the Royal Institute of Translation. The tower from which all the power of the Empire flows. Orphaned in Canton and brought to England by a mysterious guardian, Babel seemed like paradise to Robin Swift. Until it became a prison... but can a student stand against an empire? An incendiary new novel from award-winning author R.F. Kuang about the power of language, the violence of colonialism, and the sacrifices of resistance.',9,'book');
INSERT INTO book(id, title, description, price, format) VALUES (17, 'Before the Coffee Gets Cold','What would you change if you could go back in time? In a small back alley in Tokyo, there is a cafe which has been serving carefully brewed coffee for more than one hundred years. But this coffee shop offers its customers a unique experience: the chance to travel back in time. In Before the Coffee Gets Cold, we meet four visitors, each of whom is hoping to make use of the cafes time-travelling offer, in order to: confront the man who left them, receive a letter from their husband whose memory has been taken by early onset Alzheimers, to see their sister one last time, and to meet the daughter they never got the chance to know. But the journey into the past does not come without risks: customers must sit in a particular seat, they cannot leave the cafe, and finally, they must return to the present before the coffee gets cold . . . Toshikazu Kawaguchis beautiful, moving story - translated from Japanese by Geoffrey Trousselot - explores the age-old question: what would you change if you could travel back in time? More importantly, who would you want to meet, maybe for one last time?',10,'book');
INSERT INTO book(id, title, description, price, format) VALUES (18, 'The Woman in Me','The Woman in Me is a brave and astonishingly moving story about freedom, fame, motherhood, survival, faith, and hope. In June 2021, the whole world was listening as Britney Spears spoke in open court. The impact of sharing her voice-her truth-was undeniable, and it changed the course of her life and the lives of countless others. The Woman in Me reveals for the first time her incredible journey-and the strength at the core of one of the greatest performers in pop music history. Written with remarkable candor and humor, Spearss groundbreaking book illuminates the enduring power of music and love-and the importance of a woman telling her own story, on her own terms, at last.',13,'book');
INSERT INTO book(id, title, description, price, format) VALUES (19, 'Demon Copperhead','First I got myself born. And so begins the tale of Demon Copperhead: a boy born to a teenaged single mother in a single-wide trailer, with no assets beyond his dead fathers good looks and copper-colored hair, bucket-loads of charm and a talent or two the world is yet to discover. We befriend Demon on this, his journey through the modern perils of foster care, child labor, derelict schools, athletic success, addiction, the dizzying highs of true love, and the crushing losses that can accompany it. Its impossible not to fall hard for this hero who has just made your acquaintance, as you hurtle through these pages wishing you could reach into the pages save him from hardships or steer him to the rays of light that shine through even his darkest days. Inspired by the unflinching truth-telling of David Copperfield, Kingsolver enlists Dickens anger and compassion, and above all, his faith in the transformative powers of a good story. Demon is the voice of new generation of lost boys, and all those born into beautiful, cursed places they cant imagine leaving behind. This young man is about to steal all our hearts.',9,'book');
INSERT INTO book(id, title, description, price, format) VALUES (20, 'The Marriage Portrait','I thought I had made myself clear, Alfonso murmurs, barely opening his lips. I want something that conveys her… how to put this… her majesty, her bloodline. Do you understand? She is no ordinary mortal: treat her thus. Ensure, please, that the portrait reflects that, above anything else. I want everyone who looks upon this to know instantly what she is: regal, refined, untouchable. Florence, the 1560s.  Lucrezia, third daughter of Cosimo de’ Medici, is comfortable with her obscure place in the palazzo: free to wonder at its treasures, observe its clandestine workings, and to devote herself to her own artistic pursuits.  But when her older sister dies on the eve of marriage to Alfonso d’Este, ruler of Ferrara, Modena and Reggio, Lucrezia is thrust unwittingly into the limelight: the duke is quick to request her hand in marriage, and her father to accept on her behalf. Having barely left girlhood behind, Lucrezia must now make her way in a troubled court whose customs are opaque and where her arrival is not universally welcomed. Perhaps most mystifying of all is her husband himself, Alfonso.  Is he the playful sophisticate her appears before their wedding, the aesthete happiest in the company of artists and musicians, or the ruthless politician before whom even his formidable sisters seem to tremble? As Lucrezia sits in uncomfortable finery for the painting which is to preserve her image for centuries to come, one thing becomes worryingly clear.  In the court’s eyes, she has one duty: to provide the heir who will shore up the future of the Ferrarese dynasty.  Until then, for all of her rank and nobility, the new duchess’s future hangs entirely in the balance. With the drama and verve with which she illuminated the Shakespearean canvas of Hamnet, winner of the Waterstones Book of the Year and the Women’s Prize for Fiction in 2020, Maggie O’Farrell brings the world of Renaissance Italy to jewel-bright life, and offers an unforgettable portrait of a resilient young woman’s battle for her very survival.',9,'book');

-- User, password: 1234
INSERT INTO user(id, name, firstname, mail, password) VALUES(1,'Attali','Jacques','jacques.attali@gmail.com','$2y$10$mVjS8BM2AYOED88WsbwMsuZ6.aqWnqqRhWD3g5PlCGKGxZ8d2cH.i');
INSERT INTO user(id, name, firstname, mail, password) VALUES(2,'J.K Rowling','Joanne','joanne.rowling@gmail.com','$2y$10$mVjS8BM2AYOED88WsbwMsuZ6.aqWnqqRhWD3g5PlCGKGxZ8d2cH.i');
INSERT INTO user(id, name, firstname, mail, password) VALUES(3,'Lop','Tsechi','Tsechi.Lop@gmail.com','$2y$10$mVjS8BM2AYOED88WsbwMsuZ6.aqWnqqRhWD3g5PlCGKGxZ8d2cH.i');
INSERT INTO user(id, name, firstname, mail, password) VALUES(4,'Bidden','Joe','joe.bidden@gmail.com','$2y$10$mVjS8BM2AYOED88WsbwMsuZ6.aqWnqqRhWD3g5PlCGKGxZ8d2cH.i');
INSERT INTO user(id, name, firstname, mail, password) VALUES(5,'Salman','Ben','ben.salman@gmail.com','$2y$10$mVjS8BM2AYOED88WsbwMsuZ6.aqWnqqRhWD3g5PlCGKGxZ8d2cH.i');

-- Review
INSERT INTO review(id, user_id, book_id, text, star) VALUES(1,1,1,'Thank you to the publishers for this early review copy. I knew straight away this was going to appeal to me but I admit like too many other books it had hu.',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(2,2,1,'If it wasn''t for the Booker Prize I would probably not have read this - and I so pleased I have. So far my absolute front runner for winning the Booker 202...',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(3,3,2,'I truly enjoyed solving the puzzles in this book and I like how as you solve it you earned snippets of the story with each solve. However before I purchase.',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(4,4,2,'A fantastic puzzle book that you can quickly become absorbed in. Each puzzle connect and winds into this gander story arc that upon finishing the puzzles y..',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(5,5,2,'This is amazing, I am so obsessed. Such a great way to solve murders through a puzzle :',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(6,1,3,'I love Katherine Rundell''s children''s books. They feel like the books I used to read and love when I was growing up, but updated and better for mo',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(7,3,3,'As well as the content on my social media pages being almost exclusively children’s book-related, the type of emails I receive is also heavily skewed b',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(8,4,3,'Mal was a baby when she was given a cloak that would help her learn to fly. One day a stranger turns up and tries to kill her, she must escape. Christopher..',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(9,5,3,'Impossible Creatures is a hugely ambitious novel. Katherine Rundell has created an entire world and the detail in which she has done this is stunning. Alon',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(10,1,10,'I really enjoyed this look at the inhabitants of Button House, even if it is a little sad the series is coming to an end. Written by the authors of the sho.',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(11,2,10,'Thanks to the entire crew of the Six Idiots and all the creators of this book for delivering a gift that allows me to cherish all the heartwarming memories...',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(12,3,10,'This book is perfectly for all Ghosts fans and people who have just found it. I find it wonderful that you don’t even have to know a lot about the show an',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(13,4,10,'funny and silly, its all i want tbh',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(14,1,11,'I loved this story , so simple and yet it had me wanting to keep on reading it. You couldn’t help but love Gary with all of his funny ways and what seemed ... READ MORE',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(15,3,11,'Loved the free flowing style bob has got it felt nothing needed explaining , He describes Gary as a good honest guy that takes the world as it ,meeting E.',5);
INSERT INTO review(id, user_id, book_id, text, star) VALUES(16,4,1,'Delightful story, pure Bob Mortimer, to the point that you can hear him narrating. Made me laugh o',5);

-- Image
INSERT INTO image(book_id, link) VALUES(1,'\asset\img\livre1.jpg');
INSERT INTO image(book_id, link) VALUES(2,'\asset\img\image3.jpeg');
INSERT INTO image(book_id, link) VALUES(2,'\asset\img\image3.2.jpeg');
INSERT INTO image(book_id, link) VALUES(2,'\asset\img\image3.3.jpeg');
INSERT INTO image(book_id, link) VALUES(2,'\asset\img\image3.4.jpeg');
INSERT INTO image(book_id, link) VALUES(3,'\asset\img\livre3.jpg');
INSERT INTO image(book_id, link) VALUES(4,'\asset\img\image4.webp');
INSERT INTO image(book_id, link) VALUES(4,'\asset\img\image4.2.jpeg');
INSERT INTO image(book_id, link) VALUES(4,'\asset\img\image4.3.jpeg');
INSERT INTO image(book_id, link) VALUES(4,'\asset\img\image4.4.jpeg');
INSERT INTO image(book_id, link) VALUES(4,'\asset\img\image4.5.jpeg');
INSERT INTO image(book_id, link) VALUES(5,'\asset\img\image5.jpg');
INSERT INTO image(book_id, link) VALUES(6,'\asset\img\image6.jpg');
INSERT INTO image(book_id, link) VALUES(7,'\asset\img\image7.webp');
INSERT INTO image(book_id, link) VALUES(8,'\asset\img\image8.jpg');
INSERT INTO image(book_id, link) VALUES(9,'\asset\img\image9.jpg');
INSERT INTO image(book_id, link) VALUES(10,'\asset\img\image10.jpg');
INSERT INTO image(book_id, link) VALUES(11,'\asset\img\image11.webp');
INSERT INTO image(book_id, link) VALUES(12,'\asset\img\image12.jpg');
INSERT INTO image(book_id, link) VALUES(13,'\asset\img\image13.webp');
INSERT INTO image(book_id, link) VALUES(14,'\asset\img\image14.jpg');
INSERT INTO image(book_id, link) VALUES(15,'\asset\img\image15.jpg');
INSERT INTO image(book_id, link) VALUES(15,'\asset\img\image15.2.jpeg');
INSERT INTO image(book_id, link) VALUES(15,'\asset\img\image15.3.jpeg');
INSERT INTO image(book_id, link) VALUES(15,'\asset\img\image15.4.jpeg');
INSERT INTO image(book_id, link) VALUES(15,'\asset\img\image15.5.jpeg');
INSERT INTO image(book_id, link) VALUES(15,'\asset\img\image15.6.jpeg');
INSERT INTO image(book_id, link) VALUES(16,'\asset\img\image16.jpg');
INSERT INTO image(book_id, link) VALUES(17,'\asset\img\image17.webp');
INSERT INTO image(book_id, link) VALUES(18,'\asset\img\image18.webp');
INSERT INTO image(book_id, link) VALUES(19,'\asset\img\image19.jpg');
INSERT INTO image(book_id, link) VALUES(20,'\asset\img\image20.jpg');
