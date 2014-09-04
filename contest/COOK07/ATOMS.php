<?php require("../../includes/header.php"); ?><h1>Breaking Into Atoms</h1><div class="content">

<p>
Let X be the set of all integers between 0 and n-1. Suppose we have a collection S<sub>1</sub>, S<sub>2</sub>, ..., S<sub>m</sub> of subsets of X. Say an atom A is a subset of X such that for each S<sub>i</sub> we have either A is a subset of S<sub>i</sub> or A and S<sub>i</sub> do not have any common elements.</p>
<p>
Your task is to find a collection A<sub>1</sub>, ..., A<sub>k</sub> of atoms such that every item in X is in some A<sub>i</sub> and no two A<sub>i</sub>, A<sub>j</sub> with i ≠ j share a common item. Surely such a collection exists as we could create a single set {x} for each x in X. A more interesting question is to minimize k, the number of atoms.</p>
<h3>Input</h3>

<p>
The first line contains a single positive integer t ≤ 30 indicating the number of test cases. Each test case begins with two integers n,m where n is the size of X and m is the number of sets S<sub>i</sub>. Then m lines follow where the i'th such line begins with an integer v<sub>i</sub> between 1 and n (inclusive) indicating the size of S<sub>i</sub>. Following this are v<sub>i</sub> distinct integers between 0 and n-1 that describe the contents of S<sub>i</sub>.</p>
<p>
You are guaranteed that 1 ≤ n ≤ 100 and 1 ≤ m ≤<br />
30. Furthermore, each number between 0 and n-1 will appear in at least one set S<sub>i</sub>.</p>
<h3>Output</h3>

<p>
For each test case you are to output a single integer indicating the minimum number of atoms that X can be partitioned into to satisfy the constraints.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 2
3 0 1 2
3 2 3 4
4 3
2 0 1
2 1 2
2 2 3

<b>Output:</b>
3
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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