<?php require("../../includes/header.php"); ?><h1>Evil Book</h1><div class="content">

<p>
Chef Ciel got enormous cooking power from the <i>Evil Book</i>.<br />
Instead, Ciel must devote 666 magical power to the Evil Book.
</p>
<p>
Other than Ciel, there are <strong>N</strong> chefs in the world.<br />
The <strong>i</strong>-th chef has <strong>C<sub>i</sub></strong> cooking power and <strong>M<sub>i</sub></strong> magical power.<br />
Ciel may get <strong>M<sub>i</sub></strong> magical power by defeating the <strong>i</strong>-th chef in a cooking battle, which needs <strong>C<sub>i</sub></strong> effort.<br />
After that, the <strong>i</strong>-th chef's magical power <strong>M<sub>i</sub></strong> becomes 0.
</p>
<p>
The Evil Book can help her, if she gives <strong>X</strong> magical power to the Evil Book.<br />
That is, by consuming <strong>X</strong> magical power, she can choose some <b>i</b> and multiply by 1/3 both the <strong>i</strong>-th chef's cooking power <strong>C<sub>i</sub></strong> and his magical power <strong>M<sub>i</sub></strong>.<br />
Note that she can't take the help of the Evil Book unless she has at least <strong>X</strong> magical power.
</p>
<p>
Firstly, Ciel has no magical power.<br />
What's the minimum total effort for collecting at least 666 magical power?
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
Each test case contains <strong>N</strong>+1 lines.<br />
The first line for each test case has 2 integers <strong>N</strong> and <strong>X</strong>.<br />
The (<strong>i</strong>+1)-th line for each test case has 2 integers <strong>C<sub>i</sub></strong> and <strong>M<sub>i</sub></strong>.
</p>
<h3>Output</h3>
<p>
For each test case, print the minimum total effort (rounded to the nearest integer) for collecting at least 666 magical power.<br />
If it is impossible to collect 666 magical power, print "impossible" without quotes.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 5<br />
1 ≤ <strong>N</strong> ≤ 10<br />
10 ≤ <strong>X</strong> &lt; 666<br />
0 ≤ <strong>C<sub>i</sub></strong> ≤ 1000000000 (10<sup>9</sup>)<br />
0 ≤ <strong>M<sub>i</sub></strong> ≤ 1000000000 (10<sup>9</sup>)
</p>
<h3>Sample Input</h3>
<pre>4
4 10
1 30
110 500
200 700
190 800
2 665
1 250
2 415
2 10
1000000000 1000000000
1000000000 1000000000
2 10
1000000000 1000000000
0 130</pre><h3>Sample Output</h3>
<pre>168
impossible
1000000000
1882</pre><h3>Output details</h3>
<p>
In the first case, the optimal way is the following.
</p>
<p>
Initially, Ciel's magical power = 0, Total effort = 0<br />
<strong>C</strong><sub>1</sub> = 1, <strong>M</strong><sub>1</sub> = 30<br />
<strong>C</strong><sub>2</sub> = 110, <strong>M</strong><sub>2</sub> = 500<br />
<strong>C</strong><sub>3</sub> = 200, <strong>M</strong><sub>3</sub> = 700<br />
<strong>C</strong><sub>4</sub> = 190, <strong>M</strong><sub>4</sub> = 800
</p>
<p>
After defeating the 1st chef:<br />
Ciel's magical power = 30, Total effort = 1<br />
<strong>C</strong><sub>1</sub> = 1, <strong>M</strong><sub>1</sub> = 0<br />
<strong>C</strong><sub>2</sub> = 110, <strong>M</strong><sub>2</sub> = 500<br />
<strong>C</strong><sub>3</sub> = 200, <strong>M</strong><sub>3</sub> = 700<br />
<strong>C</strong><sub>4</sub> = 190, <strong>M</strong><sub>4</sub> = 800
</p>
<p>
After using 3 helps of the Evil Book (<strong>i</strong> = 2, 3, 4):<br />
Ciel's magical power = 0, Total effort = 1<br />
<strong>C</strong><sub>1</sub> = 1, <strong>M</strong><sub>1</sub> = 0<br />
<strong>C</strong><sub>2</sub> = 36+2/3, <strong>M</strong><sub>2</sub> = 166+2/3<br />
<strong>C</strong><sub>3</sub> = 66+2/3, <strong>M</strong><sub>3</sub> = 233+1/3<br />
<strong>C</strong><sub>4</sub> = 63+1/3, <strong>M</strong><sub>4</sub> = 266+2/3
</p>
<p>
After defeating the 2nd, 3rd and 4th chefs:<br />
Ciel's magical power = 666+2/3, Total effort = 167+2/3 (1 + 36+2/3 + 66+2/3 + 63+1/3)<br />
<strong>C</strong><sub>1</sub> = 10, <strong>M</strong><sub>1</sub> = 0<br />
<strong>C</strong><sub>2</sub> = 36+2/3, <strong>M</strong><sub>2</sub> = 0<br />
<strong>C</strong><sub>3</sub> = 66+2/3, <strong>M</strong><sub>3</sub> = 0<br />
<strong>C</strong><sub>4</sub> = 63+1/3, <strong>M</strong><sub>4</sub> = 0
</p>
<p>
In the fourth case, Ciel should defeat the 2nd chef at first.<br />
Then, after using 12 helps of the Evil Book, the 1st chef's cooking power and magical power become 10<sup>9</sup> / 3<sup>12</sup> = 1881.67642...
</p>
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
            <td>16-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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