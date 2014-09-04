<?php require("../../includes/header.php"); ?><h1>DRUNKEN KNIGHT</h1><div class="content">
<p>In a bizarre game of chess ,knight was so drunk, that instead of his usual move he started walking straight. In every move Knight jumps on 2n steps forward (n is number of block that he had travelled so far from starting) but after that he has to take either 1 step forward or backward.</p>
<p>Now the Knight needs to get to position X so King (i.e. You) needs to decide the order of his backward or forward step in such a way that he can reach its destination in minimum number of steps. Remember he always travels in a straight line and the length of the board is infinite.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases, for each test case enter value X ( i.e. destination)</p>
<p>Note : initially knight is at n = 1.</p>
<h3>Output</h3>
<p>For each test case the output should be string of numbers 1 &amp; 2 where 1 denotes backward step and 2 denote the forward step </p>
<p>Note : for no solution print 0.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>10^10</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
17
10
<b>Output:</b>
2111
0
</pre><h3>Explanation</h3>
<p><b>Case 1 :</b> starting from  n = 1 , knight moves to n = 3 ('2') , 5 ('1') , 9 ('1') , 17 ('1') i.e. string printed is 2 1 1 1</p>
<p><b>Case 2 :</b> no solution is possible</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/paramjeet">paramjeet</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, JS, LISP clisp, LISP sbcl, PAS fpc, PAS gpc, PERL, PERL6, PHP, PYTH, PYTH 3.1.2, RUBY</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>