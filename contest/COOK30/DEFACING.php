<?php require("../../includes/header.php"); ?><h1>Defacing Score</h1><div class="content">

<p>All chefs in the Wolf town are scored by the government and receive the score at the beginning of every year. Now Dark Chef tries to deface his score. The score is shown with the following 7-segment display:</p>
<p><img src="http://codechef.com/download/DEFACING1.png" width="393" height="47" /></p>
<p>Dark Chef can turn on some segments, but he can not turn off any segment. Thus, he can increase his score like as follows:</p>
<p><img src="http://codechef.com/download/DEFACING2.png" width="254" height="165" /></p>
<p>Please, note that Dark Chef can add new 7-segment digits to the beginning or the end of his score. But he is not allowed to end up with the score having leading zeros (except when the score is zero itself, see example case <b>6</b>).</p>
<p>Now he has received the score <b>S</b>, and he wants to increase his score as much as possible. But the maximum possible score government could give is <b>M</b>. So his score must not exceed <b>M</b>. Your task is to calculate the maximum possible score he could get after defacing.</p>
<p><b>Note.</b> The digit <b>"1"</b> can <b>not</b> be changed to the digit <b>"6"</b>, because in the representation of the digit <b>"1"</b> we have <b>right</b> <b>2</b> segments turned on, while for the digit <b>"6"</b> the upper-right segment must be turned off, see example case <b>12</b> for clarity. And, of course, the defaced score must be represented by the digits which have exactly the same form as shown in the above figure.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains two space separated integers <b>S</b> and <b>M</b>, Dark Chef's score and the maximum score the government could give respectively.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the maximum possible score Dark Chef could get after defacing.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>201301</b></li>
<li><b>0</b> ≤ <b>S</b> ≤ <b>M</b> ≤ <b>20130120</b></li>
<li>Each positive integer in the input will be given without leading zeros</li>
<li>If <b>S</b> or <b>M</b> is equal to zero, it will be given in the input as <b>"0"</b> (quotes for clarity)</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
12
25 100
77 100
0 100
8 13
8 24
0 0
19 38
89375 9247529
804276 2857282
0 20130120
3284709 20130120
1 6

<b>Output:</b>
89
100
100
8
18
0
38
9189999
2809898
20130120
19889989
4
</pre><h3>Explanation</h3>
<p>The first three example cases correspond to the figure in the problem statement.</p>
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