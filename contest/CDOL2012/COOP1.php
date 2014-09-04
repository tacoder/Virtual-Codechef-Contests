<?php require("../../includes/header.php"); ?><h1>Great Expectations</h1><div class="content">

<p>It's placement time at IISc! All students are busy studying for interiews and preparing their resumes. Lalit is also appearing for the placements. He has made a list of all companies along with their salaries, in the order of their date for placement(i.e the order in which the companies are going to come for placements,the salaries can be totally random). Being more mathematically oriented, he has also compiled the probabilities of his getting selected by each company. The placement process is as follows. Any student can write as many companies as he wants, as long as he is not selected by any company. Once he is selected by some company, his placement ends, and he cannot write any more companies. Lalit wants to devise a strategy such that he would write only those companies such that his expected salary is high. His strategy should take into consideration his chances of getting into a particular company and whether it is safe to not sit for a company in case he wishes to apply for a higher paying company. You must help Lalit decide which companies he should write, and which he shouldn't, in order to get the highest expected salary.</p>
<h3>Input</h3>
<p>The first line of input contains 'T', the number of test cases (1&lt;=T&lt;=1000). This is followed by T test cases. Each test case consists of a blank line followed by three lines. The first line contains a single number 'N', the number of companies (1 &lt;= N &lt;= 100000). The next line consists of 'N' integers separated by spaces, which are the salaries of the companies, in order. The third line consists of 'N' floating point numbers separated by spaces, which are the probabilities of Pratik's getting selected by the companies, in order.</p>
<p><h3>Output</h3>
</p><p>The output should consist of 'T' lines corresponding to the 'T' test cases. Each line should contain one floating point number, accurate to 6 decimal places, which is the best expected salary.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

2
10000 20000
0.5 0.3

3
40000 10000 20000
0.6 0.3 0.8



<b>Output:</b>
8000.000000
30400.000000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikn5">karthikn5</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>