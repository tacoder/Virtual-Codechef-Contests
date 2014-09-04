<?php require("../../includes/header.php"); ?><h1>Girl Trouble</h1><div class="content">

<p>Irene Adler is furious with Sherlock Holmes, as he is always busy with his work. So Sherlock decides to impress his lady love by buying her some gifts. He knows that he will have to buy at least K gifts. Miser that he is, he decides to go to the gift shop, and buy the cheapest K gifts available.</p>
<p>The shopkeeper on seeing the famous detective enter his shop, decides to test his intelligence. He organizes all the gifts in the shop in N lines, each line having M gifts. To further add to Sherlock’s misery, he encloses the gifts in each row in a transparent tube, and tells him that the gifts are accessible only from the ends i.e. he can only pick a gift only if there is no gift to its right or to its left. He asks Sherlock to pick one gift at a time and challenges him to minimize the total cost of the K gifts.</p>
<p>Sherlock, happy to have a challenge even in this boring task of buying gifts, accepts his challenge happily. Now he needs your help to pass the shopkeeper’s challenge and save some money. Given the cost of each gift in the N*M grid, find the minimum cost in which he can buy at least K gifts.</p>
<h3>Input</h3>
<p>The first line contains an integer T, the number of test cases.<br />
The first line of each test case contains 3 integers N,M and K.<br />
The next N lines contain M integer each, the cost of the items.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=5<br/><br />
1&lt;=N&lt;=100<br />
1&lt;=M&lt;=1000<br />
1&lt;=K&lt;=1000<br />
1&lt;=C&lt;=100000</br/></p>
<h3>Output</h3>
<p>For each test case output a single line containing the minimum cost of K gifts.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2 3
6 3
1 9
2 4 5
2 1 10 5
20 1 50 1

<b>Output:</b>
10
19
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2013</td>
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