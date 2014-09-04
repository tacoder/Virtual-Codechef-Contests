<?php require("../../includes/header.php"); ?><h1>Help the judge</h1><div class="content">

<p>A scandal has been revealed in the ruling political party: there is a large case of corruption! You are the judge in the case, and you have a lot of evidence at your disposal. Unfortunately, some of the statements may potentially contradict the others. Each piece of evidence says something about the involvement of two (not necessary different) politicians in the crime. To be precise, each statement says: "A (is/is not) involved or B (is/is not) involved." Your job is to process all the pieces of evidence, and decide one of three options:</p>
<ul>
<li>the evidence is inconsistent,</li>
<li>you can decide exactly who is involved and who isn't,</li>
<li>there is some doubt left as to who is involved.</li>
</ul>
<h3>Input</h3>
<p>In the first line of input there is an integer t (1≤t≤10), representing the number of test cases. The subsequent test cases are defined as follows. In the first line of each test case there is an integer n (1≤n≤10<sup>5</sup>) which denotes the number of politicians. Then, an integer k follows (1≤k≤3*10<sup>5</sup>), denoting the number of pieces of evidence. The following k lines contain the evidence. The description of each statement contains 2 integers, u<sub>i</sub>,v<sub>i</sub>. If statement i says that politician A is involved, then u<sub>i</sub> = A or v<sub>i</sub> = A, whereas if statement i says politician A is not involved, then u<sub>i</sub> = -A or v<sub>i</sub> = -A. There is a blank line after each test case.</p>
<h3>Output</h3>
<p>For each test case, write in a separate line of the output one of the words: "CONFLICT", "UNIQUE", or "MULTIPLE", corresponding to the above described possibilities. </p>
<h3>Example</h3>
<pre><strong>Input:</strong>
4
1 0

1 1
1 1

1 1
1 -1

1 2
1 1
-1 -1


<strong>Output:</strong>
MULTIPLE
UNIQUE
MULTIPLE
CONFLICT
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 15 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>