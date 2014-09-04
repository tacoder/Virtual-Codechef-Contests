<?php require("../../includes/header.php"); ?><h1>Chef and Gift</h1><div class="content">
<p>  Chef likes cooking. But more than that, he likes to give gifts. And now he wants to give his girlfriend an unforgettable gift. But unfortunately he forgot the password to the safe where the money he saved for the gift is kept.
</p>
<p>But he knows how to hack the safe. To do this, you need to correctly answer questions asked by the embedded computer. The computer is very strange, and asks special questions, sometimes it can ask about <b>10000</b> question (really weird). Because of this, Chef wants you to write a program that will help him to crack the safe.
</p>
<p>The questions are different, but there is only one type of question. Several numbers are given and between them one of three characters: <b>*, +, -</b> can be inserted. Note that in this case there is no priority for the operators, that is, if + is the before multiplication, you must first execute the operation of addition, and then multiplication (1 - 2 * 3 must be interpreted as (1 - 2) * 3 = -3 and not -5). The computer asks the minimum possible value of any valid expression.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The first line of each test case contains a positive integer <b>N</b>. The second line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the expression without the operators.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimal value of given expression. </p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ N ≤ 10</b></li>
<li><b>-9 ≤ A<sub>i</sub> ≤ 9</b> </li>
<p>.
</p></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
1
9

<b>Output:</b>
-4
9
</pre><p> </p>
<h3>Explanation</h3>
<p>Example case 1:  <b>1-2-3 = -4</b></p>
<h3> Scoring </h3>
<p>Subtask 1 (15 points): <b> 1 ≤ T ≤ 10 </b> <br /><br />
Subtask 2 (10 points): <b> 1 ≤ N ≤ 3 </b>   <br /><br />
Subtask 3 (20 points): <b> 1 ≤ A<sub>i</sub> ≤ 5</b>. <br /><br />
Subtask 4 (35 points): <b>1 ≤ T  ≤ 10<sup>4</sup> </b> <br /><br />
Subtask 5 (20 points):  Look at constraints.         </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/ balajiganapath"> balajiganapath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-09-2013</td>
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