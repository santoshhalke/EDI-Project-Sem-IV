<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/test.css">
    <title>Quiz</title>   
</head>
<body>
    <div class="container" id="container1">
      <h1>Quiz</h1><hr>

        <form id="quizForm">
            <!-- Question 1 -->
            <div id="question1">
                <h2>Question 1:</h2>
                <p>Which of the following is generally used for performing tasks like creating the structure of the relations, deleting relation?</p>
                <label><input type="radio" name="q1" value="DML(Data Manipulation Language)">DML(Data Manipulation Language)</label>
                <label><input type="radio" name="q1" value="Query">Query</label>
                <label><input type="radio" name="q1" value="Relational Schema">Relational Schema</label>
                <label><input type="radio" name="q1" value="DDL(Data Definition Language)"> DDL(Data Definition Language)</label>
                
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question2')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question1')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q1')">Clear My Choice</button> <!-- Added clear button -->
            </div>
        

            <!-- Question 2 -->
            <div id="question2" style="display: none;">
                <h2>Question 2:</h2>
                <p>Which of the following provides the ability to query information from the database and insert tuples into, delete tuples from, and modify tuples in the database?
                </p>
                <label><input type="radio" name="q2" value="DML(Data Manipulation Language)">DML(Data Manipulation Language)</label>
                <label><input type="radio" name="q2" value="DDL(Data Definition Language)">DDL(Data Definition Language)</label>
                <label><input type="radio" name="q2" value="Query">Query</label>
                <label><input type="radio" name="q2" value="Relational Schema">Relational Schema</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question2')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question2')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q2')">Clear My Choice</button>
            </div>

            <!-- Question 3 -->
            <div id="question3" style="display: none;">
                <h2>Question 3:</h2>
                <p> What do you mean by one to many relationships? </p>
                <label><input type="radio" name="q3" value="One class may have many teachers">One class may have many teachers</label>
                <label><input type="radio" name="q3" value="One teacher can have many classes">One teacher can have many classes </label>
                <label><input type="radio" name="q3" value="Many classes may have many teachers">Many classes may have many teachers</label>
                <label><input type="radio" name="q3" value="Many teachers may have many classes">Many teachers may have many classes</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question3')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question3')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q3')">Clear My Choice</button>
            </div>

                        <!-- Question 4 -->
                        <div id="question4" style="display: none;">
                            <h2>Question 4:</h2>
                            <p>Which one of the following refers to the "data about data"?</p>
                            <label><input type="radio" name="q4" value="Directory">Directory</label>
                            <label><input type="radio" name="q4" value="Subdata">Subdata</label>
                            <label><input type="radio" name="q4" value="wherehouse">wherehouse</label>
                            <label><input type="radio" name="q4" value="Metadata">Metadata</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question4')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question4')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q4')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 5 -->
                        <div id="question5" style="display: none;">
                            <h2>Question 5:</h2>
                            <p>Which of the following refers to the level of data abstraction that describes exactly how the data actually stored?</p>
                            <label><input type="radio" name="q5" value="Conceptual level">Conceptual level</label>
                            <label><input type="radio" name="q5" value="file level">file level</label>
                            <label><input type="radio" name="q5" value="ogical level">logical level</label>
                            <label><input type="radio" name="q5" value="Physical level">Physical level</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question5')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question5')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q5')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 6 -->
                        <div id="question6" style="display: none;">
                            <h2>Question 6:</h2>
                            <p>Rows of a relation are known as the _______.</p>
                            <label><input type="radio" name="q6" value="Degree">Degree</label>
                            <label><input type="radio" name="q6" value="Tuples">Tuples</label>
                            <label><input type="radio" name="q6" value="Entity">Entity</label>
                            <label><input type="radio" name="q6" value="All of the above">All of the above</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question6')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question6')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q6')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 7 -->
                        <div id="question7" style="display: none;">
                            <h2>Question 7:</h2>
                            <p>Which of the following can be used to extract or filter the data & information from the data warehouse?</p>
                            <label><input type="radio" name="q7" value="Data redundancy">Data redundancy</label>
                            <label><input type="radio" name="q7" value="Data recovery tool">Data recovery tool</label>
                            <label><input type="radio" name="q7" value="Data mining">Data mining</label>
                            <label><input type="radio" name="q7" value="Both B and C">Both B and C</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question7')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question7')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q7')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 8 -->
                        <div id="question8" style="display: none;">
                            <h2>Question 8:</h2>
                            <p>Which one of the following refers to the copies of the same data (or information) occupying the memory space at multiple places.</p>
                            <label><input type="radio" name="q8" value="Data Repository"> Data Repository</label>
                            <label><input type="radio" name="q8" value="Data Inconsistency">Data Inconsistency</label>
                            <label><input type="radio" name="q8" value="Data Mining">Data Mining</label>
                            <label><input type="radio" name="q8" value="Data Redundancy">Data Redundancy</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question8')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question8')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q8')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 9 -->
                        <div id="question9" style="display: none;">
                            <h2>Question 9:</h2>
                            <p>A view of database that appears to an application program is known as</p>
                            <label><input type="radio" name="q9" value="Schema">Schema</label>
                            <label><input type="radio" name="q9" value="Subschema">Subschema</label>
                            <label><input type="radio" name="q9" value="Virtual table">Virtual table</label>
                            <label><input type="radio" name="q9" value="None of this">None of this</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question9')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question9')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q9')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 10 -->
                        <div id="question10" style="display: none;">
                            <h2>Question 10:</h2>
                            <p>In functional dependency Armstrong inference rules refers to</p>
                            <label><input type="radio" name="q10" value="Reflexivity, Augmentation and Decomposition Right">Reflexivity, Augmentation and Decomposition Right</label>
                            <label><input type="radio" name="q10" value="Transitivity, Augmentation and Reflexivity">Transitivity, Augmentation and Reflexivity</label>
                            <label><input type="radio" name="q10" value="Augmentation, Transitivity, Reflexivity and Decomposition">Augmentation, Transitivity, Reflexivity and Decomposition</label>
                            <label><input type="radio" name="q10" value="Reflexivity, Transitivity and Decomposition">Reflexivity, Transitivity and Decomposition </label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question10')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question10')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q10')">Clear My Choice</button>
                        </div>
            
            <!-- Add similar sections for remaining questions -->

            <!-- Submit Button -->
            <input type="submit" id="submitBtn" style="display: none;" value="Submit">
        </form>
    </div>

    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // Function to show the next question
        function showNextQuestion(currentQuestion) {
            var nextQuestionNumber = parseInt(currentQuestion.replace('question', '')) + 1;
            var currentQuestionDiv = document.getElementById(currentQuestion);
            var nextQuestionDiv = document.getElementById('question' + nextQuestionNumber);
            if (nextQuestionDiv) {
                currentQuestionDiv.style.display = 'none';
                nextQuestionDiv.style.display = 'block';
            } else {
                // If there's no next question, show the submit button
                document.getElementById('submitBtn').style.display = 'block';
            }
        }

        // Function to show the previous question
        function showPrevQuestion(currentQuestion) {
            var prevQuestionNumber = parseInt(currentQuestion.replace('question', '')) - 1;
            var currentQuestionDiv = document.getElementById(currentQuestion);
            var prevQuestionDiv = document.getElementById('question' + prevQuestionNumber);
            if (prevQuestionDiv) {
                currentQuestionDiv.style.display = 'none';
                prevQuestionDiv.style.display = 'block';
            }
        }

        // Function to clear selected answer for a question
        function clearChoice(question) {
            var radios = document.getElementsByName(question);
            for (var i = 0; i < radios.length; i++) {
                radios[i].checked = false;
            }
        }

        // Event listener for the form submission
        document.getElementById('quizForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Calculate score
            var score = 0;
            // Define the correct answers for each question
            var correctAnswers = {
                q1: 'DDL(Data Definition Language)',
                q2: 'DML(Data Manipulation Language)',
                q3: 'One teacher can have many classes',
                q4: 'Meta Data',
                q5: 'Physical Level',
                q6: 'All of the above',
                q7: 'Data mining',
                q8: 'Data Redundancy',
                q9: 'Subschema',
                q10: 'Transitivity, Augmentation and Reflexivity'
                // Add correct answers for remaining questions
            };
            // Loop through each question
            for (var i = 1; i <= 10; i++) {
                var selectedAnswer = document.querySelector('input[name="q' + i + '"]:checked');
                // Check if an answer is selected
                if (selectedAnswer) {
                    // Check if the selected answer is correct
                    if (selectedAnswer.value === correctAnswers['q' + i]) {
                        score++;
                    }
                }
            }
            // Display score
            alert(`Your Score is ${score} out of 10`);
            result.innerHTML = score;
        });

        $(document).ready(function () {
            
            var targetNode = document.getElementById('result');

            
            var observer = new MutationObserver(function (mutationsList) {
                
                for (var mutation of mutationsList) {
                    if (mutation.type === 'childList' && targetNode.innerHTML !== '') {

                        var searchValue = targetNode.innerHTML;

                        $.ajax({
                            url: 'includes/testhandler.php',
                            method: 'POST',
                            data: { search: searchValue },
                            success: function (response) {
                                alert("Updated Successfully");
                            },
                            error: function (xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    }
                }
            });

            var config = { attributes: false, childList: true, subtree: false };
            observer.observe(targetNode, config);
        });
        
    </script>
</body>
</html>
