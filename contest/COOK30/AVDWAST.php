<?php require("../../includes/header.php"); ?><h1>Avoid Wasting</h1><div class="content">

<p>Today Tomya buys <b>N</b> retort pouches of food in Chef Ciel's restaurant. The <b>i</b>-th retort pouch contains <b>V<sub>i</sub></b> units of food, and its use-by date is the <b>U<sub>i</sub></b>-th day (1-origin). Moreover, food from the <b>i</b>-th retort pouch can be eaten only within <b>L<sub>i</sub></b> days after it was opened. Namely, if Tomya will open the <b>i</b>-th retort pouch on the <b>x<sub>i</sub></b>-th day, she can eat food units from it on the <b>k</b>-th day if and only if <b>x<sub>i</sub></b> ≤ <b>k</b> ≤ <b>min(U<sub>i</sub>, x<sub>i</sub>+L<sub>i</sub>−1)</b>.</p>
<p>The retort pouches in Ciel's restaurant are designed in such a way that if <b>V<sub>i</sub> &lt; V<sub>j</sub></b>, then <b>U<sub>i</sub> ≤ U<sub>j</sub></b>.</p>
<p>Tomya will eat at most two units of food everyday. However after the <b>min(U<sub>i</sub>, x<sub>i</sub>+L<sub>i</sub>−1)</b>-th day, uneaten food units in the <b>i</b>-th retort pouch must be discarded. Your task is to decide when to open each of the retort pouches and which food unit(s) to eat each day in such a way that the number of discarded units will be minimum.</p>
<p><b>There is also a restriction that once you open some pouch, food units from previously opened pouches should be discarded.</b></p>
<p><b>The above restriction is an addition to the problem statement that was made after the contest. We are extremely sorry about that. We all had missed the possibility to achieve better score without this restriction in some situations. We are grateful to <a href="http://www.codechef.com/users/mikhailOK">Mikhail Kever</a> for pointing out our mistake.</b></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>N</b> denoting the number of retort pouches.<br />
Each of the following <b>N</b> lines contains 3 space separated integers <b>V<sub>i</sub></b>, <b>U<sub>i</sub></b>, <b>L<sub>i</sub></b> denoting the parameters of the <b>i</b>-th pouch.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of food units which Tomya must discard.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2013</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2013</b></li>
<li><b>1</b> ≤ <b>V<sub>i</sub></b>, <b>U<sub>i</sub></b>, <b>L<sub>i</sub></b> ≤ <b>20000000000000</b> (<b>2 * 10<sup>13</sup></b>)</li>
<li>If <b>V<sub>i</sub></b> &lt; <b>V<sub>j</sub></b>, then <b>U<sub>i</sub></b> ≤ <b>U<sub>j</sub></b></li>
<li>The sum of <b>N</b> in one test file does not exceed <b>20130</b>.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
8 9 5
7 5 3
10 100 1
3
5 4 3
7 8 5
8 10 4
1
10000 1 10000

<b>Output:</b>
9
0
9998
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> One of the optimal ways is the following:<br />The 1st pouch is opened on the day <b>x<sub>1</sub> = 4</b>,<br />the 2nd pouch is opened on the day <b>x<sub>2</sub> = 1</b>,<br />the 3rd pouch is opened on the day <b>x<sub>3</sub> = 8</b>,<br />then<br />the 1st pouch is available at the interval <b>[4, 8]</b>,<br />the 2nd pouch is available at the interval <b>[1, 3]</b>,<br />the 3rd pouch is available at the interval <b>[8, 8]</b>.<br />On days 1, 2, 3, Tomya eats 2 units of the 2nd pouch each day.<br />On days 4, 5, 6, 7 Tomya eats 2 units of the 1st pouch each day.<br />On day 8, Tomya eats 2 units of the 3rd pouch.<br />In this case, Tomya discard the 1 unit of the 1st pouch, and 8 units of the 3rd pouch.</p>
<p><b>Example case 2.</b> There is only one optimal way as follows:<br />The 1st pouch is opened on the day <b>x<sub>1</sub> = 1</b>,<br />the 2nd pouch is opened on the day <b>x<sub>2</sub> = 3</b>,<br />the 3rd pouch is opened on the day <b>x<sub>3</sub> = 7</b>,<br />then<br />the 1st pouch is available at the interval <b>[1, 3]</b>,<br />the 2nd pouch is available at the interval <b>[3, 7]</b>,<br />the 3rd pouch is available at the interval <b>[7, 10]</b>.<br />On days 1, 2, Tomya eats 2 units of the 1st pouch each day.<br />On day 3, Tomya eats 1 unit of the 1st pouch and 1 unit of the 2nd pouch.<br />On days 4, 5, 6, Tomya eats 2 units of the 2nd pouch each day.<br />On days 7, 8, 9, 10, Tomya eats 2 units of the 3rd pouch each day.<br />In this case, Tomya can eat all units of food.</p>
<p><b>Example case 3.</b> Please note that here <b>L<sub>1</sub></b> is larger than <b>U<sub>1</sub></b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.013 sec</td>
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