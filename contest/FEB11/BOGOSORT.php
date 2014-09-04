<?php require("../../includes/header.php"); ?><h1>Bogosort</h1><div class="content">

<p>
Recently Johnny have learned bogosort sorting algorithm. He thought that it is too ineffective. So he decided to improve it. As you may know this algorithm shuffles the sequence randomly until it is sorted. Johnny decided that we don't need to shuffle the whole sequence every time. If after the last shuffle several first elements end up in the right places we will fix them and don't shuffle those elements furthermore. We will do the same for the last elements if they are in the right places. For example, if the initial sequence is (3, 5, 1, 6, 4, 2) and after one shuffle Johnny gets (1, 2, 5, 4, 3, 6) he will fix 1, 2 and 6 and proceed with sorting (5, 4, 3) using the same algorithm. Johnny hopes that this optimization will significantly improve the algorithm. Help him calculate the expected amount of shuffles for the improved algorithm to sort the sequence of the first n natural numbers given that no elements are in the right places initially.</p>
<h3>Input</h3>
<p>The first line of input file is number t - the number of test cases. Each of the following t lines hold single number n - the number of elements in the sequence.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 150<br />
2 &lt;= n &lt;= 150</p>
<h3>Output</h3>

<p>For each test case output the expected amount of shuffles needed for the improved algorithm to sort the sequence of first n natural numbers in the form of irreducible fractions.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
6
10

<b>Output:</b>
2
1826/189
877318/35343

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>10000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>