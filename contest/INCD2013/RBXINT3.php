<?php require("../../includes/header.php"); ?><h1>Three Juices</h1><div class="content">

<p>You are holding a party. In preparation, you are making a drink by mixing together three different types of fruit juice: Apple, Banana, and Carrot. Let's name the juices A, B and C.<br />
You want to decide what fraction of the drink should be made from each type of juice, in such a way that the maximum possible number of people attending the party like it.<br />
Each person has a minimum fraction of each of the 3 juices they would like to have in the drink. They will only like the drink if the fraction of each of the 3 juices in the drink is greater or equal to their minimum fraction for that juice.<br />
Determine the maximum number of people that you can satisfy.</p>
<p> </p>
<h3>Input</h3>
<p>•	One line containing an integer T, the number of test cases in the input file.<br />
For each test case, there will be:<br />
•	One line containing the integer N, the number of people going to the party.<br />
•	N lines, one for each person, each containing three space-separated numbers "A B C", indicating the minimum fraction of each juice that would like in the drink. A, B and C are integers between 0 and 10000 inclusive, indicating the fraction in parts-per-ten-thousand. A + B + C ≤ 10000.
</p>
<h3>Output</h3>
<p>•	T lines, one for each test case in the order they occur in the input file, each containing the maximum number of people who will like your drink.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3
10000 0 0
0 10000 0
0 0 10000
3
5000 0 0
0 2000 0
0 0 4000
5
0 1250 0
3000 0 3000
1000 1000 1000
2000 1000 2000
1000 3000 2000



<b>Output:</b>
1
2
5


</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codecheftsec">codecheftsec</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>200 sec</td>
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