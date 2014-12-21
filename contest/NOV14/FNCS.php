<?php require("../../includes/header.php"); ?><h1>Chef and Churu</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/FNCS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/FNCS.pdf">Russian</a>.</h3>
<p>Chef has recently learnt Function and Addition. He is too exited to teach this to his friend Churu. Chef and Churu are very fast friends, they share their knowledge whenever they meet. Chef use to give a lot of exercises after he teaches some concept to Churu. </p>

<p>Chef has an array of <b>N</b> numbers. He also has <b>N</b> functions. Each function will return the sum of all numbers in the array from <b>L<sub>i</sub></b> to <b>R<sub>i</sub></b>.  So Chef asks churu a lot of queries which are of two types.</p>
<li>
 Type 1:  Change the <b>x<sup>th</sup></b> element of the array to <b>y</b>. <br />
</li>
<li>
Type 2:  Return the sum of all functions from <b>m</b> to <b>n</b>.<br />
</li>
<p><br /></p>
<p>Now Churu has started to solve, but Chef realize that it is tough for him to decide whether Churu is correct or not. So he needs your help , will you help him out ?</p>
<h3>Input Format</h3>
<p>First Line is the size of the array i.e. <b>N</b> <br /><br />
Next Line contains <b>N</b> space separated numbers <b>A<sub>i</sub></b> denoting the array<br /><br />
Next N line follows denoting <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> for each functions.<br /><br />
Next Line contains an integer <b>Q</b> , number of queries to follow.<br /><br />
Next <b>Q</b> line follows , each line containing a query of Type 1 or Type 2.<br /><br />
1 <b>x y</b> : denotes a type 1 query,where <b>x</b> and <b>y</b> are integers<br /><br />
2 <b>m n</b> : denotes a type 2 query where <b>m</b> and <b>n</b> are integers<br /></p>
<h3>Output Format</h3>
<p>For each query of type 2 , output as asked above.<br /></p>
<h3>Constraints</h3>
<p>1 ≤ N ≤ 10<sup>5</sup><br /><br />
1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup><br /><br />
1 ≤ L<sub>i</sub> ≤ N<br /><br />
L<sub>i</sub> ≤ R<sub>i</sub> ≤ N<br /><br />
1 ≤ Q ≤ 10<sup>5</sup><br /><br />
1 ≤ x ≤  N<br /><br />
1 ≤ y ≤ 10<sup>9</sup><br /><br />
1 ≤ m ≤ N<br /><br />
m ≤ n ≤ N<br /></p>
<h3>Subtask</h3>
<ul>
<li>Subtask 1: N ≤ 1000 , Q ≤ 1000 , 10 points</li>
<li>Subtask 2: R-L ≤ 10 , all x will be distinct ,10 points</li>
<li>Subtask 3: Refer to constraints above , 80 points</li>
</ul>
<h3>Sample Input</h3>
<p>5<br /><br />
1 2 3 4 5<br /><br />
1 3<br /><br />
2 5<br /><br />
4 5<br /><br />
3 5<br /><br />
1 2<br /><br />
4<br /><br />
2 1 4<br /><br />
1 3 7<br /><br />
2 1 4<br /><br />
2 3 5<br /></p>
<h3>Sample Output</h3>
<p>41<br /><br />
53<br /><br />
28<br /></p>
<h3>Explanation</h3>
<p>Functions values initially :  <br /><br />
F[1] = 1+ 2 + 3 = 6<br /><br />
F[2] = 2 + 3 + 4 + 5 = 14<br /><br />
F[3] = 4+5 = 9<br /><br />
F[4] = 3+4+5 = 12<br /><br />
F[5] = 1+2 = 3<br /><br />
Query 1: F[1] + F[2] + F[3] + F[4] = 41<br /><br />
After Update , the Functions are :<br /><br />
F[1] = 10 , F[2] = 18 , F[3] = 9 , F[4] = 16 , F[5] = 3<br /><br />
Query 3: F[1] + F[2] + F[3] + F[4] = 53<br /><br />
Query 4: F[3]+F[4]+F[5] = 28<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/devuy11">devuy11</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>