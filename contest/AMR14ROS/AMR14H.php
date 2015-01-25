<?php require_once("../../includes/header.php"); ?><h1>Opening Pair</h1><div class="content">
<p>Having won the 2011 ICC Cricket World Cup, India is definitely one of the favorites to win the 2015 World Cup. In preparations for the 2015 World Cup, the coach of the Indian cricket team (well, Duncan Fletcher, not Ravi Shastri) wants to experiment with opening batsmen pairs.  An opening pair is denoted by (A, B), meaning that batsman A takes strike and batsman B is the non-striker.</p>
<p>There are 'N' matches remaining before the World Cup starts. Being rather meticulous and eager to keep his high salary, the coach wants to experiment with opening batsmen pairs based on the following conditions:<br /> 1) No batsman A should face the first ball in more than 1 match, i.e., cannot be the opening striker in more than 1 match.<br /> 2) No batsman B should be the 2nd opener in more than 1 match, i.e., cannot be the opening non-striker in more than 1 match.<br /> 3) The same opening pair cannot open the batting in more than one match, i.e., if (A, B) open the batting in some match, then neither (A, B) nor (B, A) can open the batting in any other match.</p>
<p>Note: The opening pair (A, B) is different from the opening pair (B, A). Also, it goes without saying that the two batsmen in the opening pair should be distinct, i.e (A, A) is not a valid opening pair.</p>
<p>The coach has a total of 'K' batsmen to choose from, and was wondering in how many ways he could choose the opening pairs for the N matches modulo 1000000007.</p>
<p><strong>Input:</strong><br /> The first line of input contains an integer T, denoting the number of test cases. <br /> Each of the following ’T’ lines contain 2 space separated integers N, K. You need to find the number of ways of choosing the opening pairs for N matches, given K players to choose from.</p>
<p><strong>Output:</strong><br /> For each test case, print the required answer modulo 1000000007 on a separate line.</p>
<p>Constraints:<br /> 1 &lt;= T &lt;= 1000<br /> 1 &lt;= N &lt;= 10^5<br /> 0 &lt;= K &lt;= 10^18<br /> 1 &lt;= sum of N over all cases &lt;= 10^6</p>
<p><strong>Sample Input:</strong><br /> 3<br /> 1 2<br /> 2 2<br /> 3 3</p>
<p><strong>Sample Output:</strong><br /> 2<br /> 0<br /> 12</p>
<p>Explanation:<br /> For the case N=1, K=2, there are 2 ways to choose the opening pairs =&gt; {(1,2)}, {(2,1)}<br /> For the case N=3, K=3, there are 12 ways to choose the opening pairs. Some of them are: {(1,3), (2,1), (3,2)}, {(1,2), (2,3), (3,1)}, {(1,2), (3,1), (2,3)} … etc.</p>
<p class="p8"> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/murdocc007">murdocc007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>