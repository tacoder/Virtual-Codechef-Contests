<?php require("../../includes/header.php"); ?><h1>Yet Another Nice Girl</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/ARRGAME2.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>Little Chef doesn't love math anymore. He loves Aleksandra.
</p>
<p>
Sashen'ka is nice. They spend all the time together. Even their birthdays they are celebrating together, because they were born on the same day :)
</p>
<p>
And now, this day is coming...
</p>
<p>
Chef know that most of all Sasha loves numbers, that's why he bought <b>N</b> positive numbers to a girl.<br />
From her side, Sasha as all girls, thought that if she likes something, then all people like that too. And bought to a boy <b>N</b> numbers too. xD<br />
After all greeting young people decide to play a game with their gifts. The game will be continued for <b>N </b>turns, in each turn the following will be done:</p>
<li>Chef randomly choose some number <b>x</b> from his gift.</li>
<li>Sasha randomly choose some number <b>y</b> form her gift.</li>
<li>If <b>x<sup>y</sup> &gt; y<sup>x</sup></b> then girl will kiss fellow.</li>
<li>Numbers <b>x,y</b> will be discarded from gifts.</li>
<p>Now chef is wondering what is the expected number of times he will be kissed by Sasha ?
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of numbers in each gift. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the numbers Sasha gave to Chef. Next line describe <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>N</sub></b> numbers boy gave to girl in the same way. </p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing answer for corresponding test. Your answer will be considered as correct if it will have absolute error not more then <b>10<sup>-6</sup></b>.</p>
<p> </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<p> </p>
<h3>Example</h3>
<pre>
<b>Input</b>
3
1
3
4
2
2 3
1 4
2
2 4
2 2

<b>Output:</b>
1.000000
1.500000
0.000000


</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Game will have only 1 turn. Chef will choose 3, while Sasha will choose 4. Since 3<sup>4</sup>&gt;4<sup>3</sup> girl will kiss boy. Hence answer is 1. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-08-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>