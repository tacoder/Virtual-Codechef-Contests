<?php require("../../includes/header.php"); ?><h1>Subtraction Game 1</h1><div class="content">

<p style="text-align:justify">Chef is playing a game on a sequence of <b>N</b> positive integers, say <b>A<sub>1</sub>, A<sub>2</sub>, ... A<sub>N</sub></b>. The game is played as follows.</p>
<ul>
<li>If all the numbers are equal, the game ends.</li>
<li>Otherwise
<ul>
<li>Select two numbers which are unequal</li>
<li>Subtract the smaller number from the larger number</li>
<li>Replace the larger number with the result from above (see the explanation section for clarity)</li>
</ul>
</li>
</ul>
<p style="text-align:justify">Chef has already figured out that the game <b>always terminates</b>. He also knows, for a given sequence of integers, the game will always terminate on the <b>same value</b>, no matter how the game is played. Chef wants you to simulate the game for him and tell him on which value will the game terminate for a given sequence of integers.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b>, the number of test cases. Then follow the description of <b>T</b> test cases. The first line of each test case contains a single integer <b>N</b>, the length of the sequence. The second line contains <b>N</b> positive integers, each separated by a single space.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, <b>output a single integer</b> - the value of all the numbers when they are <b>equal</b> (and the game terminates), on a line by itself.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 100</b><br /> <b>1 ≤ N ≤ 1000</b><br /> <b>1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b></p>
<h3>Sample</h3>
<pre><b>Input</b>
3
2
10 12
2
5 9
3
6 10 15

<b>Output</b>
2
1
1

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> Since there are only two numbers, the operations are forced.</p>
<ul>
<li>{ 10, 12 } =&gt; Replace 12 with ( 12 - 10 = 2 ) =&gt; { 10, 2 }</li>
<li>{ 10, 2 } =&gt; Replace 10 with ( 10 - 2 = 8 ) =&gt; { 8, 2 }</li>
<li>{ 8, 2 } =&gt; Replace 8 with ( 8 - 2 = 6 ) =&gt; { 6, 2 }</li>
<li>{ 6, 2 } =&gt; Replace 6 with ( 6 - 2 = 4 ) =&gt; { 4, 2 }</li>
<li>{ 4, 2 } =&gt; Replace 4 with ( 4 - 2 = 2 ) =&gt; { 2, 2 }</li>
</ul>
<p style="text-align:justify">The value of all the numbers when the game ends is <b>2</b>.</p>
<p style="text-align:justify"><b>Test Case 2:</b> Since there are only two numbers, the operations are forced.</p>
<ul>
<li>{ 5, 9 } =&gt; Replace 9 with ( 9 - 5 = 4 ) =&gt; { 5, 4 }</li>
<li>{ 5, 4 } =&gt; Replace 5 with ( 5 - 4 = 1 ) =&gt; { 1, 4 }</li>
<li>{ 1, 4 } =&gt; Replace 4 with ( 4 - 1 = 3 ) =&gt; { 1, 3 }</li>
<li>{ 1, 3 } =&gt; Replace 3 with ( 3 - 1 = 2 ) =&gt; { 1, 2 }</li>
<li>{ 1, 2 } =&gt; Replace 2 with ( 2 - 1 = 1 ) =&gt; { 1, 1 }</li>
</ul>
<p style="text-align:justify">The value of all the numbers when the game ends is <b>1</b>.</p>
<p style="text-align:justify"><b>Test Case 3:</b> One way to play the game is</p>
<ul>
<li>{ 6, 10, 15 } =&gt; Replace 15 with ( 15 - 6 = 9 ) =&gt; { 6, 10, 9 }</li>
<li>{ 6, 10, 9 } =&gt; Replace 10 with ( 10 - 6 = 4 ) =&gt; { 6, 4, 9 }</li>
<li>{ 6, 4, 9 } =&gt; Replace 9 with ( 9 - 6 = 3 ) =&gt; { 6, 4, 3 }</li>
<li>{ 6, 4, 3 } =&gt; Replace 6 with ( 6 - 4 = 2 ) =&gt; { 2, 4, 3 }</li>
<li>{ 2, 4, 3 } =&gt; Replace 3 with ( 3 - 2 = 1 ) =&gt; { 2, 4, 1 }</li>
<li>{ 2, 4, 1 } =&gt; Replace 4 with ( 4 - 2 = 2 ) =&gt; { 2, 2, 1 }</li>
<li>{ 2, 2, 1 } =&gt; Replace first 2 with ( 2 - 1 = 1 ) =&gt; { 1, 2, 1 }</li>
<li>{ 1, 2, 1 } =&gt; Replace 2 with ( 2 - 1 = 1 ) =&gt; { 1, 1, 1 }</li>
</ul>
<p style="text-align:justify">The value of all the numbers when the game ends is <b>1</b>. You may try to play the game differently and observe that <b>the game will always end when all the values are 1</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-05-2013</td>
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