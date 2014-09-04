<?php require("../../includes/header.php"); ?><h1>Subtraction Game 2</h1><div class="content">

<p style="text-align:justify">Chef is playing a game on a sequence of <b>N</b> positive integers, say <b>A<sub>1</sub>, A<sub>2</sub>, ... A<sub>N</sub></b>. The game is played as follows.</p>
<ul>
<li>If all the numbers are equal, the game ends.</li>
<li>Otherwise
<ul>
<li>Select two numbers which are unequal</li>
<li>Subtract the smaller number from the larger number</li>
<li>Replace the larger number with the result from above</li>
</ul>
</li>
</ul>
<p style="text-align:justify">Chef has already figured out that the game <b>always terminates</b>. He also knows, for a given sequence of integers, the game will always terminate on the <b>same value</b>, no matter how the game is played. Chef wants you to simulate the game for him and tell him if the game terminates on <b>1</b>.</p>
<p style="text-align:justify">In fact, there may be many such games. Given a sequence of integers Chef wants to know the number of <b>sub-sequences</b> of the given sequence, for which, playing the above game on the subsuquence will terminate on <b>1</b>. A <b>sub-sequence</b> can be obtained from the original sequence by <b>deleting 0 or more</b> integers from the original sequence. See the explanation section for clarity.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b>, the number of test cases. Then follow the description of <b>T</b> test cases. The first line of each test case contains a single integer <b>N</b>, the length of the sequence. The second line contains <b>N</b> positive integers, each separated by a single space.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, <b>output a single integer</b> - the number of <b>sub-sequences</b> of the original sequence, such that, playing the game on the <b>sub-sequence</b> results in ending the game with all the values equal to <b>1</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 100</b><br /> <b>1 ≤ N ≤ 60</b><br /> <b>1 ≤ A<sub>i</sub> ≤ 10<sup>4</sup></b><br /> <b>All A<sub>i</sub> will be distinct.</b></p>
<h3>Sample</h3>
<pre><b>Input</b>
3
4
2 3 5 7
4
3 4 8 16
3
6 10 15

<b>Output</b>
11
7
1

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> The following 11 sub-sequences are counted.</p>
<ul>
<li>{ 2, 3 }</li>
<li>{ 2, 5 }</li>
<li>{ 2, 7 }</li>
<li>{ 3, 5 }</li>
<li>{ 3, 7 }</li>
<li>{ 5, 7 }</li>
<li>{ 2, 3, 5 }</li>
<li>{ 2, 3, 7 }</li>
<li>{ 2, 5, 7 }</li>
<li>{ 3, 5, 7 }</li>
<li>{ 2, 3, 5, 7 }</li>
</ul>
<p style="text-align:justify"><b>Test Case 2:</b> The following 7 sub-sequences are counted.</p>
<ul>
<li>{ 3, 4 }</li>
<li>{ 3, 8 }</li>
<li>{ 3, 16 }</li>
<li>{ 3, 4, 8 }</li>
<li>{ 3, 4, 16 }</li>
<li>{ 3, 8, 16 }</li>
<li>{ 3, 4, 8, 16 }</li>
</ul>
<p style="text-align:justify"><b>Test Case 3:</b> There are 8 subsequences of { 6, 10, 15 }</p>
<ul>
<li>{} =&gt; The game cannot be played on this sub-sequence</li>
<li>{ 6 } =&gt; The game cannot be played on this sub-sequence</li>
<li>{ 10 } =&gt; The game cannot be played on this sub-sequence</li>
<li>{ 15 } =&gt; The game cannot be played on this sub-sequence</li>
<li>{ 6, 10 } =&gt; The game cannot end at { 1, 1 }</li>
<li>{ 6, 15 } =&gt; The game cannot end at { 1, 1 }</li>
<li>{ 10, 15 } =&gt; The game cannot end at { 1, 1 }</li>
<li>{ 6, 10, 15 } =&gt; The game ends at { 1, 1, 1 }. Hence this is the only sub-sequence that is counted in the result.</li>
</ul>
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