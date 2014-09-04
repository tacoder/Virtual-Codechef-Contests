<?php require("../../includes/header.php"); ?><h1>Lucky Array</h1><div class="content">

<p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.</p>
<p> Chef likes sequences of <b>n</b> positive integers, each of which does not exceed <b>m</b>. The total number of such sequences is equal to <b>m^n</b>.</p>
<p> Chef has an array <b>C</b> of <b>n-1</b> integers. Let <b>F(x)</b> be equal to the number of lucky digits in decimal representation of integer <b>x</b>.  Let there be a sequence <b>A</b> of <b>n</b> integers (1-based numeration). Chef calls it lucky when the following hold: if for each <b>i (1 &lt;= i &lt; n)</b> if <b>C[i]</b> equals to <b>1</b>, then <b>F(A[i])</b> must be equal to <b>F(A[i+1])</b> and if <b>C[i]</b> equals to <b>0</b>, then <b>F(A[i])</b> must not be equal to <b>F(A[i+1])</b>.</p>
<p> Chef has integers <b>n, m, k</b> and an array <b>C</b>. He wants to find out the <b>k-th</b> lucky sequence for a given array <b>C</b>. Help him. If the <b>k-th</b> lucky sequence does not exist, print the only integer <b>-1</b>.</p>
<p> The <b>k-th</b> lucky sequence is the <b>k-th</b> (1-based numeration) sequence in lexicographically sorted list of all lucky sequences for given integers <b>n, m</b> and an array <b>C</b>. The sequence <b>A</b> is lexicographic less than the sequence <b>B</b> if there exits integer <b>x (1 &lt;= x &lt;= n)</b> that <b>A[x] &lt; B[x]</b> and <b>A[y] = B[y]</b> for all <b>y (1 &lt;= y &lt; x)</b>.</p>
<h3>Input</h3>

<p>First line contains one number <b>T</b> - the number of test cases. Each test is formed as following: first line contains <b>3</b> integers <b>n, m,</b> and <b>k</b>. Next line contains <b>n-1</b> integers - array <b>C</b> for corresponding test.</p>
<h3>Output</h3>

<p>For each <b>T</b> test cases print sequence of integers - answer for corresponding test.</p>
<h3>Constraints</h3>

<p>
2 &lt;= <b>T</b> &lt;= 10
</p>
<p>
2 &lt;= <b>n</b> &lt;= 50
</p>
<p>
1 &lt;= <b>m, k</b> &lt;= 10^9
</p>
<p>
0 &lt;= <b>C[i]</b> &lt;= 1</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 4 7
0
3 7 4
0 1

<b>Output:</b>
-1
1 7 7</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-11-2011</td>
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