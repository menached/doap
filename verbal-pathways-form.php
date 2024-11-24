<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship Questionnaire</title>
    <style>
        /* Base styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background-color: white;
        }
        h3 {font-family:Marvel;font-size:1.6em;}
        label {font-family:Arial;font-size:.7em;}
        h2 {
            font-size:2em;
            font-family: 'Marvel', Arial;
            color: #0044cc;
        }
        h3 {
            color: #ff6600;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="number"], select, textarea {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
            background-color: #fff;
        }
        textarea {
            resize: vertical;
            padding-right: 10px;
            max-width: 90%;
        }
        input[type="submit"] {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .headergravatar {
            max-height:100px;
            max-width:100px;
            margin-left:10px;
            margin-right:5px;
            position:relative;
            float:right;
            border-radius:10px;
        }
        .toggle-switch {
            font-size: 24px;
            cursor: pointer;
            color: #0044cc;
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="save_data.php" method="POST" onsubmit="notifyParentToScroll();">
            <h2 style="text-align:center;">Mentorship Questionnaire</h2>
            <i style="position:relative;float:left;" id="toggleIcon" class="fas fa-toggle-on toggle-switch" onclick="togglePlaceholderData()" title="Toggle Sample Data"></i>
            <p>
                <figure>
                    <img class="headergravatar" src="https://www.avautismcenter.com/William_Fleischer.png" class="floatleft">
                    Click the toggle to show/hide Williams responses!
                </figure>
            </p>

            <h3>Personal Information</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="ie: William Fleischer" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" max="120" placeholder="ie: 22" required>

            <label for="pronouns">Preferred pronouns:</label>
            <input type="text" id="pronouns" name="pronouns" placeholder="ie: His Majesty the Prince">

            <label for="communication_methods">Preferred communication methods:</label>
            <textarea id="communication_methods" name="communication_methods" rows="3" placeholder="ie: Words, pictures PEC, AAC using proloquo, body language, pointing, gesturing"></textarea>

            <label for="communication_tools">Specific tools or devices for communication:</label>
            <textarea id="communication_tools" name="communication_tools" rows="3" placeholder="ie: Twirling ribbon"></textarea>

            <h3>Interests and Passions</h3>
            <label for="hobbies">Favorite hobbies or activities:</label>
            <textarea id="hobbies" name="hobbies" rows="3" placeholder="ie: Driving in cars, Rides on the city or school bus, etc."></textarea>

            <label for="passions">Topics or activities you're passionate about:</label>
            <textarea id="passions" name="passions" rows="3" placeholder="ie: Watching videos on my tablet, visiting Grandma"></textarea>

            <h3>Strengths and Skills</h3>
            <label for="strengths">Strengths:</label>
            <textarea id="strengths" name="strengths" rows="3" placeholder="ie: Great Attitude, loves people"></textarea>

            <label for="skills_to_develop">Skills to develop:</label>
            <textarea id="skills_to_develop" name="skills_to_develop" rows="3" placeholder="ie: Tying shoes, personal living skills"></textarea>

            <h3>Challenges and Sensitivities</h3>
            <label for="challenges">Challenges:</label>
            <textarea id="challenges" name="challenges" rows="3" placeholder="ie: Anxiety and depression"></textarea>

            <label for="sensory_sensitivities">Sensory sensitivities or triggers:</label>
            <textarea id="sensory_sensitivities" name="sensory_sensitivities" rows="3" placeholder="ie: Loud noises, soft fabrics"></textarea>

            <h3>Support Needs</h3>
            <label for="mentor_support">Types of support from a mentor:</label>
            <textarea id="mentor_support" name="mentor_support" rows="3" placeholder="ie: Life skills, social skills"></textarea>

            <label for="mentor_assistance">Mentor assistance with daily life:</label>
            <textarea id="mentor_assistance" name="mentor_assistance" rows="3" placeholder="ie: Guidance in social and life skills"></textarea>

            <h3>Family and Support System</h3>
            <label for="support_people">Support system:</label>
            <textarea id="support_people" name="support_people" rows="3" placeholder="ie: Uncle Jon, caregivers"></textarea>

            <label for="support_influence">How they support you:</label>
            <textarea id="support_influence" name="support_influence" rows="3" placeholder="ie: Providing care, social interactions"></textarea>

            <h3>Goals and Aspirations</h3>
            <label for="short_term_goals">Short-term goals:</label>
            <textarea id="short_term_goals" name="short_term_goals" rows="3" placeholder="ie: Meeting and making a new friend"></textarea>

            <label for="long_term_goals">Long-term goals:</label>
            <textarea id="long_term_goals" name="long_term_goals" rows="3" placeholder="ie: Adding to vocabulary, learning self-help skills"></textarea>

            <h3>Learning Style</h3>
            <label for="learning_style">Preferred learning style:</label>
            <textarea id="learning_style" name="learning_style" rows="3" placeholder="ie: Demonstration-based learning"></textarea>

            <label for="learning_strategies">Strategies for learning:</label>
            <textarea id="learning_strategies" name="learning_strategies" rows="3" placeholder="ie: Routine-based, repetition"></textarea>

            <h3>Social Skills</h3>
            <label for="social_comfort">Comfort in social situations:</label>
            <textarea id="social_comfort" name="social_comfort" rows="3" placeholder="ie: Familiarity helps in social settings"></textarea>

            <label for="social_skills">Social skills to work on:</label>
            <textarea id="social_skills" name="social_skills" rows="3" placeholder="ie: Engaging with new people"></textarea>

            <h3>Cultural and Community Context</h3>
            <label for="cultural_factors">Important cultural/community factors:</label>
            <textarea id="cultural_factors" name="cultural_factors" rows="3" placeholder="ie: Acceptance and belonging in the community"></textarea>

            <label for="community_influence">Influence on identity and experiences:</label>
            <textarea id="community_influence" name="community_influence" rows="3" placeholder="ie: Feeling a part of the community"></textarea>

            <h3>Additional Comments</h3>
            <label for="additional_comments">Anything else to share:</label>
            <textarea id="additional_comments" name="additional_comments" rows="3" placeholder="ie: Self-injurious or aggressive tendencies when upset"></textarea>

            <input type="submit" value="Submit">
        </form>
        <script>
            let sampleDataVisible = true;

            // Placeholder sample data
            const samplePlaceholders = {
                name: "ie: William Fleischer",
                age: "ie: 22",
                pronouns: "ie: His Majesty the Prince",
                communication_methods: "ie: Words, pictures PEC, AAC using proloquo, body language, pointing, gesturing",
                communication_tools: "ie: Twirling ribbon",
                hobbies: "ie: Driving in cars, Rides on the city or school bus, etc.",
                passions: "ie: Watching videos on my tablet, visiting Grandma",
                strengths: "ie: Great Attitude, loves people",
                skills_to_develop: "ie: Tying shoes, personal living skills",
                challenges: "ie: Anxiety and depression",
                sensory_sensitivities: "ie: Loud noises, soft fabrics",
                mentor_support: "ie: Life skills, social skills",
                mentor_assistance: "ie: Guidance in social and life skills",
                support_people: "ie: Uncle Jon, caregivers",
                support_influence: "ie: Providing care, social interactions",
                short_term_goals: "ie: Meeting and making a new friend",
                long_term_goals: "ie: Adding to vocabulary, learning self-help skills",
                learning_style: "ie: Demonstration-based learning",
                learning_strategies: "ie: Routine-based, repetition",
                social_comfort: "ie: Familiarity helps in social settings",
                social_skills: "ie: Engaging with new people",
                cultural_factors: "ie: Acceptance and belonging in the community",
                community_influence: "ie: Feeling a part of the community",
                additional_comments: "ie: Self-injurious or aggressive tendencies when upset"
            };


            function togglePlaceholderData() {
                sampleDataVisible = !sampleDataVisible;
                document.getElementById("toggleIcon").classList.toggle("fa-toggle-on");
                document.getElementById("toggleIcon").classList.toggle("fa-toggle-off");

                for (const [key, placeholder] of Object.entries(samplePlaceholders)) {
                    const field = document.getElementById(key);
                    field.placeholder = sampleDataVisible ? placeholder : "";
                }
            }

            function notifyParentToScroll() {
                if (window.parent) {
                    window.parent.postMessage({ type: 'scrollToTop' }, "https://www.avautismcenter.com");
                }
            }

            window.addEventListener("load", function() {
                const height = document.body.scrollHeight;
                window.parent.postMessage({ type: "setHeight", height: height }, "https://www.avautismcenter.com");
            });
        </script>
    </div>
</body>
</html>

