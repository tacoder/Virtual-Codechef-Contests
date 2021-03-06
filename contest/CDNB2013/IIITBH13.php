<?php require("../../includes/header.php"); ?><h1>Problem 4</h1><div class="content">

<p> </p>
<p>I want to make an online poker website. A very important component of such a system is the random number generator. It needs to be fast and random enough. Here is a compromise I came up with. I need a way to generate random numbers of length at most D. My plan is to select a prime number P = 10D. I am also going to pick non-negative integers A and B. Finally, I'm going to pick an integer seed S between 0 and P-1, inclusive.</p>
<p>
To output my sequence of pseudo-random numbers, I'm going to first output S and then compute the new value of S like this:<br />
S := (A*S + B) mod P.</p>
<p>
Then I will output the new value of S as the next number in the sequence and update S again by using the same formula. I can repeat this as many times as I want.</p>
<p>
Do you think that this is a good random number generator? Can you write a program that takes K consecutive elements of a sequence that was generated by my random number generator, and prints the next element of the sequence?
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input gives the number of test cases, T. T test cases follow. Each one starts with a line containing D and K. The next line contains K consecutive elements generated by a random number generator of the kind described above.</p>
<h3>Output</h3>
<p>For each test case, output one line containing "Case #x: y", where x is the case number (starting from 1) and y is either the next number in the sequence, or the string "I don't know." if the answer is ambiguous.
</p>
<h3>Limits</h3>
<ul>
<li>1 = T = 100.</li>
<li>1 = K = 10.</li>
<p>The K integers will be consecutive elements of a sequence generated by a random number generator of the type described above.
</p>
</ul>
<h3>Small dataset</h3>
<li>1 = D = 4.</li>
<h3>Sample</h3>
<ul>
<li>Input </li>
<li>3</li>
<li>2 10</li>
<li>0 1 2 3 4 5 6 7 8 9</li>
<li>3 1</li>
<li>13</li>
<li>1 5</li>
<li>6 6 6 6 6</li>
<li>Output </li>
<li>Case #1: 10</li>
<li>Case #2: I don't know.</li>
<li>Case #3: 6</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rggroups">rggroups</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2013</td>
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