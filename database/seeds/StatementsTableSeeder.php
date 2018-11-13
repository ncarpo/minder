<?php

use Illuminate\Database\Seeder;

class StatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertPSED();
        $this->insertPD();
        $this->insertCL();
        $this->insertL();
        $this->insertM();
        $this->insertUW();
        $this->insertAD();
    }

    public function insertPSED()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '00_11',
                'description' => 'Enjoys the company of others and seeks contact with others from birth.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '00_11',
                'description' => 'Gazes at faces and copies facial movements. e.g. sticking out tongue, opening mouth and widening eyes.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '00_11',
                'description' => 'Responds when talked to, for example, moves arms and legs, changes facial expression, moves body and makes mouth movements'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '00_11',
                'description' => 'Recognises and is most responsive to main carerâ€™s voice: face brightens, activity increases when familiar carer appears.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '00_11',
                'description' => 'Responds to what carer is paying attention to, e.g. following their gaze.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '00_11',
                'description' => 'Likes cuddles and being held: calms, snuggles in, smiles, gazes at carerâ€™s face or strokes carerâ€™s skin.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '08_20',
                'description' => 'Seeks to gain attention in a variety of ways, drawing others into social interaction.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '08_20',
                'description' => 'Builds relationships with special people.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '08_20',
                'description' => 'Is wary of unfamiliar people.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '08_20',
                'description' => 'Interacts with others and explores new situations when supported by familiar person.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '08_20',
                'description' => 'Shows interest in the activities of others and responds differently to children and adults, e.g. may be more interested in watching children than adults or may pay more attention when children talk to them.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '16_26',
                'description' => 'Plays alongside others.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '16_26',
                'description' => 'Uses a familiar adult as a secure base from which to explore independantly in new environments, e.g. ventures away to play and interact with others, but returns for a cuddle or reassurance if becomes anxious.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '16_26',
                'description' => 'Plays cooperatively with a fmailiar adult, e.g. rolling a ball back and forth.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '22_36',
                'description' => 'Interested in others\' play and to join in.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '22_36',
                'description' => 'Seeks out others to share experiences.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '22_36',
                'description' => 'Shows attention and concern for people who are special to them.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '22_36',
                'description' => 'May form a special friendship with another child.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '30_50',
                'description' => 'Can play in a group, extending and elaborating play ideas, e.g. building up a role-play activity with other children.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '30_50',
                'description' => 'Initiates play, offering cues to peers to join them.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '30_50',
                'description' => 'Keeps play going by responding to what others are saying or doing.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '30_50',
                'description' => 'Demonstrates friendly behaviour, initiating conversations and forming good relationships with peers and familiar adults.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '40_60',
                'description' => 'Initiates conversations, attends to and takes account of what others say.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '40_60',
                'description' => 'Explains own knowledge and understanding, and asks appropriate questions of others.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 1,
                'age_bracket' => '40_60',
                'description' => 'Takes steps to resolve conflicts with other children, e.g. finding a compromise.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '00_11',
                'description' => 'Laughs and gurgles, e.g. shows pleasure at being tickled and other physical interactions.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '00_11',
                'description' => 'Uses voice, gesture, eye contact and facial expression to make contact with people and keep their attention.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '08_20',
                'description' => 'Enjoys finding own nose, eyes or tummy as part of naming games.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '08_20',
                'description' => 'Learns that own voice and actions have effects on others.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '08_20',
                'description' => 'Uses pointing with eye gaze to make requests, and to share an interest.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '08_20',
                'description' => 'Engages other person to help achieve a goal, e.g. to get an object out of reach.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '16_26',
                'description' => 'Explores new toys and environments, but \'checks in\' regularly with familiar adult as and when needed.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '16_26',
                'description' => 'Gradually able to engage in pretend play with toys (supports child to understand their own thinking may be different from others).'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '16_26',
                'description' => 'Demonstrates sense of self as an individual, e.g. wants to do things independantly, says "No" to adult.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '22_36',
                'description' => 'Seperates from main carer with support and encouragement from a familiar adult.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '22_36',
                'description' => 'Expresses own preferences and interests.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '30_50',
                'description' => 'Can select and use activities and resources with help.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '30_50',
                'description' => 'Welcomes and values praise for what they have done.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '30_50',
                'description' => 'Enjoys responsibility of carrying out small tasks.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '30_50',
                'description' => 'Is more outgoing towards unfamiliar people and more confident in new social situations.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '30_50',
                'description' => 'Confident to talk to other children when playing, and will communicate freely about own home and community.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '30_50',
                'description' => 'Shows confidence in asking adults for help.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '40_60',
                'description' => 'Confident to speak to others about own needs, wants, interests and opinions.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 2,
                'age_bracket' => '40_60',
                'description' => 'Can describe self in positive terms and talk about abilities.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '00_11',
                'description' => 'Is comforted by touch and people\'s faces and voices.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '00_11',
                'description' => 'Seeks physical and emotional comfort by snuggling in to trusted adults.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '00_11',
                'description' => 'Calms from being upset when held, rocked, spoken or sung to with soothing voice.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '00_11',
                'description' => 'Shows a range of emotions such as pleasure, fear and excitement.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '00_11',
                'description' => 'Reacts emotionally to other people\'s emotions, e.g. smiles when smiled at and becomes distressed if hears another child crying.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '08_20',
                'description' => 'Uses familiar adult to share feelings such as excitement or pleasure, and for \'emotional refueling\' when feeling tired, stressed or frustrated.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '08_20',
                'description' => 'Growing ability to soothe themselves, and may like to use a comfort object.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '08_20',
                'description' => 'Cooperates with caregiving experiences e.g. dressing.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '08_20',
                'description' => 'Beginning to understand \'yes\', \'no\' and some boundaries.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '16_26',
                'description' => 'Is aware of others\' feelings, for example, looks concerened if hears crying or looks excited if hears a familiar happy voice.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '16_26',
                'description' => 'Growing sense of will and determination mat result in feelings of anger and frustration which are difficult to handle, e.g. may have tantrums'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '16_26',
                'description' => 'Responds to a few appropriate boundaries, with encouragement and support'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '16_26',
                'description' => 'Begins to learn that some things are theirs, some things are shared, and some things belong to other people'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Seeks comfort from familiar adults when needed.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Can express their own feelings such as sad, happy, cross, scared, worried.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Responds to the feelings and wishes of others.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Aware that some actions can hurt or harm others.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Tries to help or give comfirt when others are distressed.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Show understanding and cooperates with some boundaries and routines.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Can inhibit own actions/bahaviours, e.g. stop themselves from doing something they shouldn\'t.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '22_36',
                'description' => 'Growing ability to distract self when upset, e.g. by engaging in a new play activity.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '30_50',
                'description' => 'Aware if own feelings, and knows that some actions and words can hurt others\' feelings.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '30_50',
                'description' => 'Begins to accept the needs of others and can take turns and share resources, sometimes with support from others.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '30_50',
                'description' => 'Can usually tolerate delay when needs are not immediately met, and understands wishes may not always be met.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '30_50',
                'description' => 'Can usually adapt behaviour to different events, social situations and changes in routine.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '40_60',
                'description' => 'Understands that own actions affect other people, for example, becomes upset or tries to comfort another child when they realise that have upset them.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '40_60',
                'description' => 'Aware of the boundaries set, and of behavioural expectations in the setting.'
            ],
            [
                'area_id' => 1,
                'aspect_id' => 3,
                'age_bracket' => '40_60',
                'description' => 'Beginning to be able to negotiate and solve problems without aggression, e.g. when someone has taken their toy.'
            ],
        ]);
    }

    public function insertPD()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Turns head in response to sounds and sights.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Gradually develops ability to hold up own head.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Makes movements with arms and legs which gradually become more controlled.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Rolls over from front to back, from back to front.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'When lying on tummy becomes able to lift first head and then chest, supporting self with forearms and then straight arms.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Watches and explores hands and feet, e.g. when lying on back lifts legs into vertical position and grasps feet.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Reaches out for, touches and begins to hold objects.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '00_11',
                'description' => 'Explores objects with mouth, often picking up an object and holding it to the mouth',
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Sits unsupported on the floor.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'When sitting, can lean forward to pick up small toys.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Pulls to standing, holding on to furniture or person for support.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Crawls, bottom shuffles or rolls continuously to move around.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Walks around furniture lifting one foot and stepping sideways (cruising), and walks with one or both hands held by adult.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Takes first few steps independently.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Passes toys from one hand to the other.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Holds an object in each hand and brings them together in the middle, e.g. holds two blocks and bangs them together.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Picks up small objects between thumb and fingers.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Enjoys the sensory experience of making marks in damp sand, paste or paint.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '08_20',
                'description' => 'Holds pen or crayon using a whole hand (palmar) grasp and makes random marks with different strokes.',
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '16_26',
                'description' => 'Walks upstairs holding hand of adult.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '16_26',
                'description' => 'Comes downstairs backwards on knees (crawling).'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '16_26',
                'description' => 'Beginning to balance blocks to build a small tower.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '16_26',
                'description' => 'Makes connections between their movement and the marks they make. '
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Runs safely on whole foot.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Squats with steadiness to rest or play with object on the ground, and rises to feet without using hands.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Climbs confidently and is beginning to pull themselves up on nursery play climbing equipment.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Can kick a large ball.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Turns pages in a book, sometimes several at once.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Shows control in holding and using jugs to pour, hammers, books and mark-making tools.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Beginning to use three fingers (tripod grip) to hold writing tools.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Imitates drawing simple shapes such as circles and lines.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'Walks upstairs or downstairs holding onto a rail two feet to a step.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '22_36',
                'description' => 'May be beginning to show preference for dominant hand.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Moves freely and with pleasure and confidence in a range of ways, such as slithering, shuffling, rolling, crawling, walking, running, jumping, skipping, sliding and hopping.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Mounts stairs, steps or climbing equipment using alternate feet.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Walks downstairs, two feet to each step while carrying a small object.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Runs skilfully and negotiates space successfully, adjusting speed or direction to avoid obstacles.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Can stand momentarily on one foot when shown.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Can catch a large ball.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Draws lines and circles using gross motor movements.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Uses one-handed tools and equipment, e.g. makes snips in paper with child scissors.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Holds pencil between thumb and two fingers, no longer using whole-hand grasp.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Holds pencil near point between first two fingers and thumb and uses it with good control.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '30_50',
                'description' => 'Can copy some letters, e.g. letters from their name',
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Experiments with different ways of moving.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Jumps off an object and lands appropriately.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Negotiates space successfully when playing racing and chasing games with other children, adjusting speed or changing direction to avoid obstacles.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Travels with confidence and skill around, under, over and through balancing and climbing equipment.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Shows increasing control over an object in pushing, patting, throwing, catching or kicking it.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Uses simple tools to effect changes to materials.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Handles tools, objects, construction and malleable materials safely and with increasing control.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Shows a preference for a dominant hand.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Begins to use anticlockwise movement and retrace vertical lines.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Begins to form recognisable letters.',
            ],
            [
                'area_id' => 2,
                'aspect_id' => 4,
                'age_bracket' => '40_60',
                'description' => 'Uses a pencil and holds it effectively to form recognisable letters, most of which are correctly formed.',
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '00_11',
                'description' => 'Responds to and thrives on warm, sensitive physical contact and care.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '00_11',
                'description' => 'Expresses discomfort, hunger or thirst.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '00_11',
                'description' => 'Anticipates food routines with interest.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '08_20',
                'description' => 'Opens mouth for spoon.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '08_20',
                'description' => 'Holds own bottle or cup.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '08_20',
                'description' => 'Grasps finger foods and brings them to mouth.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '08_20',
                'description' => 'Attempts to use spoon: can guide towards mouth but food often falls off.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '08_20',
                'description' => 'Can actively cooperate with nappy changing (lies still, helps hold legs up).'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '08_20',
                'description' => 'Starts to communicate urination, bowel movement'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Develops own likes and dislikes in food and drink.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Willing to try new food textures and tastes.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Holds cup with both hands and drinks without much spilling.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Clearly communicates wet or soiled nappy or pants.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Shows some awareness of bladder and bowel urges.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Shows awareness of what a potty or toilet is used for.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '16_26',
                'description' => 'Shows a desire to help with dressing/undressing and hygiene routines.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '22_36',
                'description' => 'Feeds self competently with spoon.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '22_36',
                'description' => 'Drinks well without spilling.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '22_36',
                'description' => 'Clearly communicates their need for potty or toilet.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '22_36',
                'description' => 'Beginning to recognise danger and seeks support of significant adults for help.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '22_36',
                'description' => 'Helps with clothing, e.g. puts on hat, unzips zipper on jacket, takes off unbuttoned shirt.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '22_36',
                'description' => 'Beginning to be independent in self-care, but still often needs adult support.'
            ]
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '30_50',
                'description' => 'Can tell adults when hungry or tired or when they want to rest or play.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '30_50',
                'description' => 'Observes the effects of activity on their bodies.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '30_50',
                'description' => 'Understands that equipment and tools have to be used safely.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '30_50',
                'description' => 'Gains more bowel and bladder control and can attend to toileting needs most of the time themselves.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '30_50',
                'description' => 'Can usually manage washing and drying hands.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '30_50',
                'description' => 'Dresses with help, e.g. puts arms into open-fronted coat or shirt when held up, pulls up own trousers, and pulls up zipper once it is fastened at the bottom.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '40_60',
                'description' => 'Eats a healthy range of foodstuffs and understands need for variety in food.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '40_60',
                'description' => 'Usually dry and clean during the day.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '40_60',
                'description' => 'Shows some understanding that good practices with regard to exercise, eating, sleeping and hygiene can contribute to good health.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '40_60',
                'description' => 'Shows understanding of the need for safety when tackling new challenges, and considers and manages some risks.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '40_60',
                'description' => 'Shows understanding of how to transport and store equipment safely.'
            ],
            [
                'area_id' => 2,
                'aspect_id' => 5,
                'age_bracket' => '40_60',
                'description' => 'Practices some appropriate safety measures without direct supervision.'
            ],
        ]);
    }

    public function insertCL()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Turns toward a familiar sound then locates range of sounds with accuracy.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Listens to, distinguishes and responds to intonations and sounds of voices.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Reacts in interaction with others by smiling, looking and moving.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Quietens or alerts to the sound of speech.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Looks intently at a person talking, but stops responding if speaker turns away.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Listens to familiar sounds, words, or finger plays.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '00_11',
                'description' => 'Fleeting Attention â€“ not under childâ€™s control, new stimuli takes whole attention.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '08_20',
                'description' => 'Moves whole bodies to sounds they enjoy, such as music or a regular beat.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '08_20',
                'description' => 'Has a strong exploratory impulse.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '08_20',
                'description' => 'Concentrates intently on an object or activity of own choosing for short periods.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '08_20',
                'description' => 'Pays attention to dominant stimulus â€“ easily distracted by noises or other people talking.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '16_26',
                'description' => 'Listens to and enjoys rhythmic patterns in rhymes and stories.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '16_26',
                'description' => 'Enjoys rhymes and demonstrates listening by trying to join in with actions or vocalisations.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '16_26',
                'description' => 'Rigid attention â€“ may appear not to hear.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '22_36',
                'description' => 'Listens with interest to the noises adults make when they read stories.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '22_36',
                'description' => 'Recognises and responds to many familiar sounds, e.g. turning to a knock on the door, looking at or going to the door.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '22_36',
                'description' => 'Shows interest in play with sounds, songs and rhymes.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '22_36',
                'description' => 'Single channelled attention. Can shift to a different task if attention fully obtained â€“ using childâ€™s name helps focus.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '30_50',
                'description' => 'Listens to others one to one or in small groups, when conversation interests them.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '30_50',
                'description' => 'Listens to stories with increasing attention and recall.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '30_50',
                'description' => 'Joins in with repeated refrains and anticipates key events and phrases in rhymes and stories.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '30_50',
                'description' => 'Focusing attention â€“ still listen or do, but can shift own attention.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '30_50',
                'description' => 'Is able to follow directions (if not intently focused on own choice of activity).'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '40_60',
                'description' => 'Maintains attention, concentrates and sits quietly during appropriate activity.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 6,
                'age_bracket' => '40_60',
                'description' => 'Two-channelled attention â€“ can listen and do for short span.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '00_11',
                'description' => 'Stops and looks when hears own name.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '00_11',
                'description' => 'Starts to understand contextual clues, e.g. familiar gestures, words and sounds.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '08_20',
                'description' => 'Developing the ability to follow othersâ€™ body language, including pointing and gesture.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '08_20',
                'description' => 'Responds to the different things said when in a familiar context with a special person (e.g. â€˜Whereâ€™s Mummy?â€™, â€˜Whereâ€™s your nose?â€™).'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '08_20',
                'description' => 'Understanding of single words in context is developing, e.g. â€˜cupâ€™, â€˜milkâ€™, â€˜daddyâ€™.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '16_26',
                'description' => 'Selects familiar objects by name and will go and find objects when asked, or identify objects from a group.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '16_26',
                'description' => 'Understands simple sentences (e.g. â€˜Throw the ball.â€™)'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '22_36',
                'description' => 'Identifies action words by pointing to the right picture, e.g., â€œWhoâ€™s jumping?â€'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '22_36',
                'description' => 'Understands more complex sentences, e.g. â€˜Put your toys away and then weâ€™ll read a book.â€™'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '22_36',
                'description' => 'Understands â€˜whoâ€™, â€˜whatâ€™, â€˜whereâ€™ in simple questions (e.g. Whoâ€™s that/can? Whatâ€™s that? Where is.?).'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '22_36',
                'description' => 'Developing understanding of simple concepts (e.g. big/little).'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '30_50',
                'description' => 'Understands use of objects (e.g. â€œWhat do we use to cut things?â€™)'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '30_50',
                'description' => 'Shows understanding of prepositions such as â€˜underâ€™, â€˜on topâ€™, â€˜behindâ€™ by carrying out an action or selecting correct picture.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '30_50',
                'description' => 'Responds to simple instructions, e.g. to get or put away an object.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '30_50',
                'description' => 'Beginning to understand â€˜whyâ€™ and â€˜howâ€™ questions.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '40_60',
                'description' => 'Responds to instructions involving a two-part sequence.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '40_60',
                'description' => 'Understands humour, e.g. nonsense rhymes, jokes.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '40_60',
                'description' => 'Able to follow a story without pictures or props.'
            ],
            [
                'area_id' => 3,
                'aspect_id' => 7,
                'age_bracket' => '40_60',
                'description' => 'Listens and responds to ideas expressed by others in conversation or discussion.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '00_11',
                'description' => 'Communicates needs and feelings in a variety of ways including crying, gurgling, babbling and squealing.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '00_11',
                'description' => 'Makes own sounds in response when talked to by familiar adults.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '00_11',
                'description' => 'Lifts arms in anticipation of being picked up.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '00_11',
                'description' => 'Practises and gradually develops speech sounds (babbling) to communicate with adults; says sounds like â€˜baba, nono, gogoâ€™.',
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '08_20',
                'description' => 'Uses sounds in play, e.g. â€˜brrrmâ€™ for toy car.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '08_20',
                'description' => 'Uses single words.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '08_20',
                'description' => 'Frequently imitates words and sounds.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '08_20',
                'description' => 'Enjoys babbling and increasingly experiments with using sounds and words to communicate for a range of purposes (e.g. teddy, more, no, bye-bye.)',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '08_20',
                'description' => 'Uses pointing with eye gaze to make requests, and to share an interest.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '08_20',
                'description' => 'Creates personal words as they begin to develop language.',
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '16_26',
                'description' => 'Copies familiar expressions, e.g. â€˜Oh dearâ€™, â€˜All goneâ€™.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '16_26',
                'description' => 'Beginning to put two words together (e.g. â€˜want ballâ€™, â€˜more juiceâ€™).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '16_26',
                'description' => 'Uses different types of everyday words (nouns, verbs and adjectives, e.g. banana, go, sleep, hot).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '16_26',
                'description' => 'Beginning to ask simple questions.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '16_26',
                'description' => 'Beginning to talk about people and things that are not present.',
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Uses language as a powerful means of widening contacts, sharing feelings, experiences and thoughts.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Holds a conversation, jumping from topic to topic.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Learns new words very rapidly and is able to use them in communicating.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Uses gestures, sometimes with limited talk, e.g. reaches toward toy, saying â€˜I have itâ€™.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Uses a variety of questions (e.g. what, where, who).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Uses simple sentences (e.g.â€™ Mummy gonna work.â€™).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '22_36',
                'description' => 'Beginning to use word endings (e.g. going, cats).',
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Beginning to use more complex sentences to link thoughts (e.g. using and, because).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Can retell a simple past event in correct order (e.g. went down slide, hurt finger).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Uses talk to connect ideas, explain what is happening and anticipate what might happen next, recall and relive past experiences.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Questions why things happen and gives explanations. Asks e.g. who, what, when, how.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Uses a range of tenses (e.g. play, playing, will play, played).',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Uses intonation, rhythm and phrasing to make the meaning clear to others.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Uses vocabulary focused on objects and people that are of particular importance to them.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Builds up vocabulary that reflects the breadth of their experiences.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '30_50',
                'description' => 'Uses talk in pretending that objects stand for something else in play, e,g, â€˜This box is my castle.â€™',
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '40_60',
                'description' => 'Extends vocabulary, especially by grouping and naming, exploring the meaning and sounds of new words.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '40_60',
                'description' => 'Uses language to imagine and recreate roles and experiences in play situations.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '40_60',
                'description' => 'Links statements and sticks to a main theme or intention.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '40_60',
                'description' => 'Uses talk to organise, sequence and clarify thinking, ideas, feelings and events.',
            ],
            [
                'area_id' => 3,
                'aspect_id' => 8,
                'age_bracket' => '40_60',
                'description' => 'Introduces a storyline or narrative into their play.',
            ],
        ]);
    }

    public function insertL()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '00_11',
                'description' => 'Enjoys looking at books and other printed material with familiar people.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '08_20',
                'description' => 'Handles books and printed material with interest.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '16_26',
                'description' => 'Interested in books and rhymes and may have favourites.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '22_36',
                'description' => 'Has some favourite stories, rhymes, songs, poems or jingles.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '22_36',
                'description' => 'Repeats words or phrases from familiar stories.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '22_36',
                'description' => 'Fills in the missing word or phrase in a known rhyme, story or game, e.g. â€˜Humpty Dumpty sat on a â€¦â€™. '
            ],

            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Enjoys rhyming and rhythmic activities.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Shows awareness of rhyme and alliteration.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Recognises rhythm in spoken words.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Listens to and joins in with stories and poems, one-to-one and also in small groups.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Joins in with repeated refrains and anticipates key events and phrases in rhymes and stories.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Beginning to be aware of the way stories are structured.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Suggests how the story might end.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Listens to stories with increasing attention and recall.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Describes main story settings, events and principal characters.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Shows interest in illustrations and print in books and print in the environment.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Recognises familiar words and signs such as own name and advertising logos.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Looks at books independently.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Handles books carefully.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Knows information can be relayed in the form of print.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Holds books the correct way up and turns pages.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '30_50',
                'description' => 'Knows that print carries meaning and, in English, is read from left to right and top to bottom.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Continues a rhyming string.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Hears and says the initial sound in words.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Can segment the sounds in simple words and blend them together and knows which letters represent some of them.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Links sounds to letters, naming and sounding the letters of the alphabet.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Begins to read words and simple sentences.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Uses vocabulary and forms of speech that are increasingly influenced by their experiences of books.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Enjoys an increasing range of books.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 9,
                'age_bracket' => '40_60',
                'description' => 'Knows that information can be retrieved from books and computers.'
            ],
        ]);

        DB::table('statements')->insert([
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '00_11',
                'description' => 'Childrenâ€™s later writing is based on skills and understandings which they develop as babies and toddlers. Before they can write, they need to learn to use spoken language to communicate. Later they learn to write down the words they can say. (See the roots of Writing in Communication and language). Early mark-making is not the same as writing.It is a sensory and physical experience for babies and toddlers, which they do not yet connect to forming symbols which can communicate meaning.(See roots of mark-making and handwriting in Playing and exploring and Physical Development).'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '08_20',
                'description' => 'Childrenâ€™s later writing is based on skills and understandings which they develop as babies and toddlers. Before they can write, they need to learn to use spoken language to communicate. Later they learn to write down the words they can say. (See the roots of Writing in Communication and language). Early mark-making is not the same as writing.It is a sensory and physical experience for babies and toddlers, which they do not yet connect to forming symbols which can communicate meaning.(See roots of mark-making and handwriting in Playing and exploring and Physical Development).'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '16_26',
                'description' => 'Childrenâ€™s later writing is based on skills and understandings which they develop as babies and toddlers. Before they can write, they need to learn to use spoken language to communicate. Later they learn to write down the words they can say. (See the roots of Writing in Communication and language). Early mark-making is not the same as writing.It is a sensory and physical experience for babies and toddlers, which they do not yet connect to forming symbols which can communicate meaning.(See roots of mark-making and handwriting in Playing and exploring and Physical Development).'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '22_36',
                'description' => 'Distinguishes between the different marks they make.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '30_50',
                'description' => 'Sometimes gives meaning to marks as they draw and paint.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '30_50',
                'description' => 'Ascribes meanings to marks that they see in different places.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Gives meaning to marks they make as they draw, write and paint.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Begins to break the flow of speech into words.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Continues a rhyming string.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Hears and says the initial sound in words.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Can segment the sounds in simple words and blend them together.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Links sounds to letters, naming and sounding the letters of the alphabet.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Uses some clearly identifiable letters to communicate meaning, representing some sounds correctly and in sequence.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Writes own name and other things such as labels,captions.'
            ],
            [
                'area_id' => 4,
                'aspect_id' => 10,
                'age_bracket' => '40_60',
                'description' => 'Attempts to write short sentences in meaningful contexts.',
            ]
        ]);
    }

    public function insertM()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '00_11',
                'description' => 'Notices changes in number of objects/images or sounds in group of up to 3.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '08_20',
                'description' => 'Develops an awareness of number names through their enjoyment of action rhymes and songs that relate to their experience of numbers.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '08_20',
                'description' => 'Has some understanding that things exist, even when out of sight.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '16_26',
                'description' => 'Knows that things exist, even when out of sight.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '16_26',
                'description' => 'Beginning to organise and categorise objects, e.g. putting all the teddy bears together or teddies and cars in separate piles.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '16_26',
                'description' => 'Says some counting words randomly'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '22_36',
                'description' => 'Selects a small number of objects from a group when asked, for example, â€˜please give me oneâ€™, â€˜please give me twoâ€™.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '22_36',
                'description' => 'Recites some number names in sequence.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '22_36',
                'description' => 'Creates and experiments with symbols and marks representing ideas of number.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '22_36',
                'description' => 'Begins to make comparisons between quantities.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '22_36',
                'description' => 'Uses some language of quantities, such as â€˜moreâ€™ and â€˜a lotâ€™.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '22_36',
                'description' => 'Knows that a group of things changes in quantity when something is added or taken away.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Uses some number names and number language spontaneously.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Uses some number names accurately in play.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Recites numbers in order to 10.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Knows that numbers identify how many objects are in a set.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Beginning to represent numbers using fingers, marks on paper or pictures.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Sometimes matches numeral and quantity correctly.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Shows curiosity about numbers by offering comments or asking questions.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Compares two groups of objects, saying when they have the same number.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Shows an interest in number problems.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Separates a group of three or four objects in different ways, beginning to recognise that the total is still the same.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Shows an interest in numerals in the environment.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Shows an interest in representing numbers.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '30_50',
                'description' => 'Realises not only objects, but anything can be counted, including steps, claps or jumps.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Recognise some numerals of personal significance.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Recognises numerals 1 to 5.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Counts up to three or four objects by saying one number name for each item.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Counts actions or objects which cannot be moved.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Counts objects to 10, and beginning to count beyond 10.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Counts out up to six objects from a larger group.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Selects the correct numeral to represent 1 to 5, then 1 to 10 objects.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Counts an irregular arrangement of up to ten objects.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Estimates how many objects they can see and checks by counting them.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Uses the language of â€˜moreâ€™ and â€˜fewerâ€™ to compare two sets of objects.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Finds the total number of items in two groups by counting all of them.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Says the number that is one more than a given number.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Finds one more or one less from a group of up to five objects, then ten objects.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'In practical activities and discussion, beginning to use the vocabulary involved in adding and subtracting.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Records, using marks that they can interpret and explain.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 11,
                'age_bracket' => '40_60',
                'description' => 'Begins to identify own mathematical problems based on own interests and fascinations'
            ],
        ]);

        DB::table('statements')->insert([
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '00_11',
                'description' => 'Babiesâ€™ early awareness of shape, space and measure grows from their sensory awareness and opportunities to observe objects and their movements, and to play and explore. See Characteristics of Effective Learning - Playing and Exploring, and Physical Development.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '08_20',
                'description' => 'Recognises big things and small things in meaningful contexts.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '08_20',
                'description' => 'Gets to know and enjoy daily routines, such as getting-up time, mealtimes, nappy time, and bedtime.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '16_26',
                'description' => 'Attempts, sometimes successfully, to fit shapes into spaces on inset boards or jigsaw puzzles.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '16_26',
                'description' => 'Uses blocks to create their own simple structures and arrangements.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '16_26',
                'description' => 'Enjoys filling and emptying containers.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '16_26',
                'description' => 'Associates a sequence of actions with daily routines.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '16_26',
                'description' => 'Beginning to understand that things might happen â€˜nowâ€™.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '22_36',
                'description' => 'Notices simple shapes and patterns in pictures.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '22_36',
                'description' => 'Beginning to categorise objects according to properties such as shape or size.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '22_36',
                'description' => 'Begins to use the language of size.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '22_36',
                'description' => 'Understands some talk about immediate past and future, e.g. â€˜beforeâ€™, â€˜laterâ€™ or â€˜soonâ€™.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '22_36',
                'description' => 'Anticipates specific time-based events such as mealtimes or home time.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Shows an interest in shape and space by playing with shapes or making arrangements with objects.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Shows awareness of similarities of shapes in the environment.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Uses positional language.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Shows interest in shape by sustained construction activity or by talking about shapes or arrangements.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Shows interest in shapes in the environment.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Uses shapes appropriately for tasks.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '30_50',
                'description' => 'Beginning to talk about the shapes of everyday objects, e.g. â€˜roundâ€™ and â€˜tallâ€™.',
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Beginning to use mathematical names for â€˜solidâ€™ 3D shapes and â€˜flatâ€™ 2D shapes, and mathematical terms to describe shapes.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Selects a particular named shape.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Can describe their relative position such as â€˜behindâ€™ or â€˜next toâ€™.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Orders two or three items by length or height.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Orders two items by weight or capacity.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Uses familiar objects and common shapes to create and recreate patterns and build models.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Uses everyday language related to time.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Beginning to use everyday language related to money.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Orders and sequences familiar events.'
            ],
            [
                'area_id' => 5,
                'aspect_id' => 12,
                'age_bracket' => '40_60',
                'description' => 'Measures short periods of time in simple ways.'
            ],
        ]);
    }

    public function insertUW()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '00_11',
                'description' => 'The beginnings of understanding of People and communities lie in early attachment and other relationships. See Personal, Social and Emotional Development and Communication and Language.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '08_20',
                'description' => 'The beginnings of understanding of People and communities lie in early attachment and other relationships. See Personal, Social and Emotional Development and Communication and Language.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '16_26',
                'description' => 'Is curious about people and shows interest in stories about themselves and their family.',
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '16_26',
                'description' => 'Enjoys pictures and stories about themselves, their families and other people.',
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '22_36',
                'description' => 'Has a sense of own immediate family and relations.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '22_36',
                'description' => 'In pretend play, imitates everyday actions and events from own family and cultural background, e.g. making and drinking tea.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '22_36',
                'description' => 'Beginning to have their own friends.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '22_36',
                'description' => 'Learns that they have similarities and differences that connect them to, and distinguish them from, others.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '30_50',
                'description' => 'Shows interest in the lives of people who are familiar to them.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '30_50',
                'description' => 'Remembers and talks about significant events in their own experience.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '30_50',
                'description' => 'Recognises and describes special times or events for family or friends.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '30_50',
                'description' => 'Shows interest in different occupations and ways of life.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '30_50',
                'description' => 'Knows some of the things that make them unique, and can talk about some of the similarities and differences in relation to friends or family.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 13,
                'age_bracket' => '40_60',
                'description' => 'Enjoys joining in with family customs and routines.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '00_11',
                'description' => 'Moves eyes, then head, to follow moving objects.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '00_11',
                'description' => 'Reacts with abrupt change when a face or object suddenly disappears from view.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '00_11',
                'description' => 'Looks around a room with interest; visually scans environment for novel, interesting objects and events.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '00_11',
                'description' => 'Smiles with pleasure at recognisable playthings.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '00_11',
                'description' => 'Repeats actions that have an effect, e.g. kicking or hitting a mobile or shaking a rattle.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '08_20',
                'description' => 'Closely observes what animals, people and vehicles do.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '08_20',
                'description' => 'Watches toy being hidden and tries to find it.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '08_20',
                'description' => 'Looks for dropped objects.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '08_20',
                'description' => 'Becomes absorbed in combining objects, e.g. banging two objects or placing objects into containers.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '08_20',
                'description' => 'Knows things are used in different ways, e.g. a ball for rolling or throwing, a toy car for pushing.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '16_26',
                'description' => 'Explores objects by linking together different approaches: shaking, hitting, looking, feeling, tasting, mouthing, pulling, turning and poking.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '16_26',
                'description' => 'Remembers where objects belong.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '16_26',
                'description' => 'Matches parts of objects that fit together, e.g. puts lid on teapot.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '22_36',
                'description' => 'Enjoys playing with small-world models such as a farm, a garage, or a train track.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '22_36',
                'description' => 'Notices detailed features of objects in their environment.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '30_50',
                'description' => 'Comments and asks questions about aspects of their familiar world such as the place where they live or the natural world.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '30_50',
                'description' => 'Can talk about some of the things they have observed such as plants, animals, natural and found objects.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '30_50',
                'description' => 'Talks about why things happen and how things work.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '30_50',
                'description' => 'Developing an understanding of growth, decay and changes over time.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '30_50',
                'description' => 'Shows care and concern for living things and the environment.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 14,
                'age_bracket' => '40_60',
                'description' => 'Looks closely at similarities, differences, patterns and change.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '00_11',
                'description' => 'The beginnings of understanding technology lie in babies exploring and making sense of objects and how they behave. See Characteristics of Effective Learning - Playing and Exploring and Creating and Thinking Critically'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '08_20',
                'description' => 'The beginnings of understanding technology lie in babies exploring and making sense of objects and how they behave. See Characteristics of Effective Learning - Playing and Exploring and Creating and Thinking Critically'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '16_26',
                'description' => 'Anticipates repeated sounds, sights and actions, e.g. when an adult demonstrates an action toy several times.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '16_26',
                'description' => 'Shows interest in toys with buttons, flaps and simple mechanisms and beginning to learn to operate them.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '22_36',
                'description' => 'Seeks to acquire basic skills in turning on and operating some ICT equipment.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '22_36',
                'description' => 'Operates mechanical toys, e.g. turns the knob on a wind-up toy or pulls back on a friction car.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '30_50',
                'description' => 'Knows how to operate simple equipment, e.g. turns on CD player and uses remote control.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '30_50',
                'description' => 'Shows an interest in technological toys with knobs or pulleys, or real objects such as cameras or mobile phones.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '30_50',
                'description' => 'Shows skill in making toys work by pressing parts or lifting flaps to achieve effects such as sound, movements or new images.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '30_50',
                'description' => 'Knows that information can be retrieved from computers'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '40_60',
                'description' => 'Completes a simple program on a computer.'
            ],
            [
                'area_id' => 6,
                'aspect_id' => 15,
                'age_bracket' => '40_60',
                'description' => 'Uses ICT hardware to interact with age-appropriate computer software.'
            ],
        ]);
    }

    public function insertAD()
    {
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '00_11',
                'description' => 'Babies explore media and materials as part of their exploration of the world around them. See Characteristics of Effective Learning â€“ Playing and Exploring, Physical Development, Understanding the World â€“ The World.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '08_20',
                'description' => 'Explores and experiments with a range of media through sensory exploration, and using whole body.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '08_20',
                'description' => 'Move their whole bodies to sounds they enjoy, such as music or a regular beat.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '08_20',
                'description' => 'Imitates and improvises actions they have observed, e.g. clapping or waving.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '08_20',
                'description' => 'Begins to move to music, listen to or join in rhymes or songs.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '08_20',
                'description' => 'Notices and is interested in the effects of making movements which leave marks.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '16_26',
                'description' => 'Explores and experiments with a range of media through sensory exploration, and using whole body.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '16_26',
                'description' => 'Move their whole bodies to sounds they enjoy, such as music or a regular beat.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '16_26',
                'description' => 'Imitates and improvises actions they have observed, e.g. clapping or waving.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '16_26',
                'description' => 'Begins to move to music, listen to or join in rhymes or songs.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '16_26',
                'description' => 'Notices and is interested in the effects of making movements which leave marks.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '22_36',
                'description' => 'Joins in singing favourite songs.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '22_36',
                'description' => 'Creates sounds by banging, shaking, tapping or blowing.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '22_36',
                'description' => 'Shows an interest in the way musical instruments sound.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '22_36',
                'description' => 'Experiments with blocks, colours and marks.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Enjoys joining in with dancing and ring games.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Sings a few familiar songs.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Beginning to move rhythmically.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Imitates movement in response to music.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Taps out simple repeated rhythms.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Explores and learns how sounds can be changed.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Explores colour and how colours can be changed.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Understands that they can use lines to enclose a space, and then begin to use these shapes to represent objects.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Beginning to be interested in and describe the texture of things.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Uses various construction materials.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Beginning to construct, stacking blocks vertically and horizontally, making enclosures and creating spaces.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Joins construction pieces together to build and balance.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '30_50',
                'description' => 'Realises tools can be used for a purpose.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Begins to build a repertoire of songs and dances.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Explores the different sounds of instruments.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Explores what happens when they mix colours.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Experiments to create different textures.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Understands that different media can be combined to create new effects.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Manipulates materials to achieve a planned effect.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Constructs with a purpose in mind, using a variety of resources.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Uses simple tools and techniques competently and appropriately.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Selects appropriate resources and adapts work where necessary.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 16,
                'age_bracket' => '40_60',
                'description' => 'Selects tools and techniques needed to shape, assemble and join materials they are using.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '00_11',
                'description' => 'Babies and toddlers need to explore the world and develop a range of ways to communicate before they can express their own ideas through arts and design. See Characteristics of Effective Learning; Communication and Language; Physical Development; Personal, Social and Emotional Development'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '08_20',
                'description' => 'Babies and toddlers need to explore the world and develop a range of ways to communicate before they can express their own ideas through arts and design. See Characteristics of Effective Learning; Communication and Language; Physical Development; Personal, Social and Emotional Development'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '16_26',
                'description' => 'Expresses self through physical action and sound.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '16_26',
                'description' => 'Pretends that one object represents another, especially when objects have characteristics in common.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '22_36',
                'description' => 'Beginning to use representation to communicate, e.g. drawing a line and saying â€˜Thatâ€™s me.â€™'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '22_36',
                'description' => 'Beginning to make-believe by pretending.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Developing preferences for forms of expression.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Uses movement to express feelings.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Creates movement in response to music.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Sings to self and makes up simple songs.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Makes up rhythms.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Notices what adults do, imitating what is observed and then doing it spontaneously when the adult is not there.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Engages in imaginative role-play based on own first-hand experiences.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Builds stories around toys, e.g. farm animals needing rescue from an armchair â€˜cliffâ€™.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Uses available resources to create props to support role-play.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '30_50',
                'description' => 'Captures experiences and responses with a range of media, such as music, dance and paint and other materials or words.'
            ],
        ]);
        DB::table('statements')->insert([
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '40_60',
                'description' => 'Create simple representations of events, people and objects.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '40_60',
                'description' => 'Initiates new combinations of movement and gesture in order to express and respond to feelings, ideas and experiences.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '40_60',
                'description' => 'Chooses particular colours to use for a purpose.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '40_60',
                'description' => 'Introduces a storyline or narrative into their play.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '40_60',
                'description' => 'Plays alongside other children who are engaged in the same theme.'
            ],
            [
                'area_id' => 7,
                'aspect_id' => 17,
                'age_bracket' => '40_60',
                'description' => 'Plays cooperatively as part of a group to develop and act out a narrative.'
            ],
        ]);
    }
}