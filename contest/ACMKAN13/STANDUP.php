<?php require("../../includes/header.php"); ?><h1>Stand Up</h1><div class="content">
<p>A classroom at the Academy of Bit Wizardry contains <b>N rows</b> of chairs. Each row, contains exactly <b>M chairs</b>. Each chair is expected to be filled by exactly one student; you may assume no chair is ever empty.</p>
<p>Curiously, <b>N*M</b> is guaranteed to be an <b>even number</b>. This means there are always an <b>even number of students</b> in a class. The students come to the Academy of Bit Wizardry from <b>(N*M / 2)</b> coutries. In fact, <b>exactly 2 students come from each country</b>.</p>
<p>You enter the classroom and find all the students sitting. This displeases you and you request them to stand up. They tell you that they are going to play a game with you. You will play the game <b>move by move</b>. In each move you <b>first make 1 student stand up and declare his country name</b>. Then, you make <b>another student stand up and declare his country name</b>. If both the students belong to the same country, they both remain <b>standing</b>. Otherwise, they will now both sit down. Of course, you may ask the same student to stand up again in a later move.</p>
<p>You grin as you know you have an amazing memory. Although you don't know initially which student belongs to what country, you are sure that <b>once a student declares it, you will remember it indefinitely</b>. You will never have to make a student stand up more than twice. Soon, you will have the entire class standing.</p>
<p>There is no way for you to know what country a student belongs to initially. You could choose a fixed strategy that does not optimize itself based on the responses the students are giving and easily have the class standing in exactly <b>N*M</b> moves. But you are smarter; hence, you will <b>dynamically optimize your strategy based on their responses</b>.</p>
<p>Assuming that the students choose their chairs uniformally randomly over all possible seatings, what is the <b>expected number of moves</b> that such a dynamically optimized optimal strategy would take to make every student stand up?</p>
<h3>Input</h3>
<p>There are at most <b>100 test cases</b> in each test file. Each test case contains a single line with two positive integer <b>N</b> and <b>M</b>. The input is terminated by <b>EOF</b>.</p>
<h3>Output</h3>
<p>For every test case, output a single line with the <b>expected number of moves</b> you will take to make every student stand up if you employ an optimal strategy. Print this number <b>rounded to 4 decimal places</b>.</p>
<h3>Constraints</h3>
<pre>
<b>1 ≤ N ≤ 50</b>
<b>1 ≤ M ≤ 50</b>

</pre><h3>Sample Input</h3>
<pre>
1 2
2 2

</pre><h3>Sample Output</h3>
<pre>
1.0000
2.6667

</pre><h3>Explanation</h3>
<p>In the first test case, there are only 2 students. Of course they are from the same country. Hence, only 1 move is needed.</p>
<p>In the second test case, we wil leither take 2 moves, or three moves at most.</p>
<p>In the first move, the probability that we choose a pair of students from the same country, is 1/3. In this case, the game ends in 2 moves.</p>
<p>Otherwise, with probability 2/3, we have selected two students from different countries. Now, we will only take 2 more moves. <b>For the third student we ask to stand up, after the first 2 sit, we already know who his pair is from the first move.</b> And the remaining two will be asked to stand up in the third move.</p>
<p>Hence, the expected number of moves is <b>2 * (1/3) + 3 * (2 / 3) = 2.6667</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>