<?php require("../../includes/header.php"); ?><h1>Range of Data</h1><div class="content">

<p>Alice has <b>N</b> pieces of paper.<br />
These papers are numbered from <b>1</b> to <b>N</b>.<br />
She writes down the numbers <b>1</b> to <b>N</b> in order (one number on each paper),<br />
i.e. paper <i>i</i> has number <i>i</i> written on it.<br />
Bob messes the numbers on these papers.<br />
He either <b>adds</b> a constant to a number or <b>subtracts</b> a constant from the number.<br />
He performs <b>M</b> such operations.<br />
Each operation is of the form: <b>w x y z</b> where each of them is an integer.<br />
If <b>w = 1</b>, then Alice has to <b>add z</b> to every number on papers <b>x</b> to <b>y</b> (<i>both inclusive</i>).<br />
If <b>w = 2,</b> then Alice has to <b>subtract z</b> from every number on papers <b>x</b> to <b>y</b> (<i>both inclusive</i>).<br />
After doing this, Bob challenges Alice to tell him the range of this data,<br />
where <i>range</i> denotes the count of numbers from the smallest number to the largest (See <a href="http://www.wikihow.com/Find-the-Range-of-a-Data-Set">here</a> for more details).<br />
Your task is to help Alice in finding the range.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br />
Each test case starts with a line containing two space separated integers <b>N</b> and <b>M</b>.<br />
Then follow <b>M</b> lines. Each of these lines is of the form <b>w x y z</b>. Each separated by a single space.</p>
<h3>Output:</h3>
<p>For each test case output a single line containing the range of the new data set after Bob's modifications.</p>
<h3>Constraints:</h3>
<pre>1 ≤ T ≤ 20
1 ≤ M ≤ 10000
1 ≤ N ≤ 1000000
1 ≤ x ≤ y ≤ N
0 ≤ z ≤ 100000</pre><h3>Example:</h3>
<pre>
<b>Input</b>
1
10 2
2 3 6 4
1 5 9 1

<b>Output:</b>
11

</pre><p><b>Explanation:</b> Initially the papers are as follows: 1 2 3 4 5 6 7 8 9 10. First operation decreases the numbers on paper number 3,4,5 and 6 by 4. Now, the papers look like: 1 2 -1 0 1 2 7 8 9 10. The second operation increases the numbers on papers 5 to 9 by 1. The numbers will now be 1 2 -1 0 2 3 8 9 10 10. Thus, the range is 10 - (-1) = 11.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-07-2012</td>
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