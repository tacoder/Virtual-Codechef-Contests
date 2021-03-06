<?php require("../../includes/header.php"); ?><h1>Shortest Circuit Evaluation</h1><div class="content">

<p>Short circuit evaluation of Boolean expressions denotes the semantic in which the second argument of some Boolean operator is not evaluated if the value </p>
<p>of the first argument is enough to have the result. This technique is used in many programming languages to optimize the evaluation of Boolean expressions. </p>
<p>Specifically for "A and B", if A is false we know that the whole expression is false and we don't need to evaluate B. For "A or B", if A is true we know the </p>
<p>result to be true. Now having that those Boolean operations are commutative we may actually evaluate B first and not evaluate A in case B gives us the </p>
<p>result. Moving the idea further if we have "A1 or A2 or...or An" we can evaluate the variables in any order and as soon as we have one of them as true we </p>
<p>know that the whole expression is true. We can do similarly for and operation. Now let's consider some complex Boolean expression. We will fix the order in </p>
<p>which we will evaluate the variables of the expression. Then we evaluate those variables in that order and we won't evaluate the variables that give us no </p>
<p>new information about the value of the whole expression in the process. For example, assume we have "A and B or C" and we fix the order of evaluation B, A, </p>
<p>C. First we evaluate B, if it's false we don't have to evaluate A and only evaluate C. However if B is true we will need to evaluate A. If A is true we know </p>
<p>the expression is true and won't evaluate C, otherwise we evaluate C to have the value of the expression. Now your task is having some complex Boolean </p>
<p>expression containing and, or, not operations and for each variable having the probability that this variable is true, you need to find the order of </p>
<p>evaluation for which the expected number of evaluations in the process described above will be minimal.</p>
<h3>Input</h3>

<p>The first line of input file contains number t - the amount of test cases. Then t test cases follow. The first line of each test case will contain the </p>
<p>Boolean expression. The expression will be valid and will consist of and, or, not operations, brackets and variable names. All the variable names in one </p>
<p>expression will be distinct. Then for each variable present in the expression there will be a line in the input in the format s p, where s - the name of the </p>
<p>variable and p - is the probability that the variable will be true. The names of the variables will consist of small Latin letters only.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 50<br />
0 &lt; p &lt; 1 <br />
The length of the expression won't exceed 30000 characters.<br />
There will be no more than 1000 variable in the expression.<br />
The length of the variable names won't exceed 5 characters.<br />
<b><i>Also the expression will be in the form of either conjunctive or disjunctive normal form.</i></b></p>
<h3>Output</h3>

<p>For each test case output the expected number of evaluations for the optimal order of evaluation of variables for short circuit evaluation process </p>
<p>described above. Output the answer with 6 digits after the dot.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
(a and b) or c
a 0.3
b 0.4
c 0.5
(a or b) and (not d or c)
a 0.5
b 0.3
c 0.8
d 0.25
ab or bc or cd
ab 0.3
bc 0.1
cd 0.2

<b>Output:</b>
1.650000
2.280000
2.260000

</pre><h3>Explanation</h3>

<p>In the first test case the best order is c, a, b.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-07-2011</td>
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