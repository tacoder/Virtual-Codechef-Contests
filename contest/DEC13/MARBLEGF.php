<?php require("../../includes/header.php"); ?><h1>Funny Marbles</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/MARBLEGF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/MARBLEGF.pdf">Russian</a>.</h3>
<h3>Story-line</h3>
<p>Lira loves marbles very much and she especially loves to play with them with her school friends.</p>
<p>Today, Lira is very excited, as her mom said she would give her and her friends some new marbles for her to play with. She immediately requested her mom to give her the new marbles, but, her mom had some tricks kept up her sleeve:</p>
<p>Mom: "Not so fast, young girl!! These won't come for free! If you want to keep playing with them, you must prove you deserve them!!"</p>
<p>Lira: *<b>moans</b>* "Alright, mom, what do I have to do now?"</p>
<p>(Yes, Lira's mom can be quite annoying)</p>
<p>Mom: "Well, you can assume that I have an array A of size <b>N</b> , where <b>N</b> is the total number of students I will give marbles to, and A[i] is the number of marbles each student initially has."</p>
<p>Lira: *<b>smiles slightly</b>* "So you're feeling generous hum?"</p>
<p>Mom: "Well, not too generous... imagine I wanted to give more marbles to some of your school friends who do well on their exams, or, on the other hand take away some marbles from the greedier friends."</p>
<p>Lira: "Mom, c'mon that's too easy!!"</p>
<p>Mom: "Alright, so given a group of students, starting on student <b>i</b> and ending on student <b>j</b>, I want to know how many marbles they have together!"</p>
<p>Well, it turns out that Lira actually did solve this problem and she did it very efficiently!!</p>
<p>It's now your turn to solve the problem that Lira already did in a brilliant way!</p>
<h3>Formal description:</h3>
<p>Lira is given array <b>A</b>, which contains elements between 1000 and 2000.</p>
<p>Three types of queries can be performed on this array: add a given value to a single element on it, subtract a given value from a single element on it and find the sum of the values between indexes i and j, i.e. A[i]+...+A[j]. Check input and example section for details.</p>
<h3>Input</h3>
<p>The first line of the input contains two integers: <b>N</b> and <b>Q</b>, denoting respectively, the number of students that there are present to receive the marbles as a gift and the number of actions Lira's mom will perform.</p>
<p>These actions can be of three different types:</p>
<li><b>S i j</b> - if the mom wants to find the sum of the number of marbles from students i to j.</li>
<li><b>G i num_marbles</b> - if the mom decides to give num_marbles to student i</li>
<li><b>T i num_marbles</b> - if the mom decides to take away num_marbles from student i</li>
<h3>Output</h3>
<p>The output should contain as many lines as the number of queries S and it should contain the answer for each query on a separate line</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000000</b></li>
<li><b>3</b> ≤ <b>Q</b> ≤ <b>50000</b></li>
<li><b>The array is 0-indexed.</b></li>
<li><b>1000</b> ≤ <b>A[i]</b> ≤ <b>2000</b></li>
<li><b>A student can never have a negative value of marbles. (i.e. there's no data which can cause a student to have a negative value of marbles)</b></li>
<li><b>0</b> ≤ <b>i, j</b> ≤ <b>N-1</b>, and <b>i</b> ≤ <b>j</b> for the sum query</li>
<li><b>At any given time, it is assured that the maximum number of marbles each student can have (<b>num_marbles</b>) never exceeds the size of the int data type.</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>5 3
1000 1002 1003 1004 1005
S 0 2
G 0 3
S 0 2

<b>Output:</b>
3005
3008
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-11-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>