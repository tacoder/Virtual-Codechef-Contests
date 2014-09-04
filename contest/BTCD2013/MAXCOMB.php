<?php require("../../includes/header.php"); ?><h1>Help Sherlock</h1><div class="content">
<p>Sherlock has fallen in love with Irene Addler(The Woman), now he wants to impress her. Irene wants to see how clever he actually is. She asks Moriarty to give her some problem. Moriarty designs the problems as follows:<br />
Given two number N and M as input find numbers such as:<br /><br />
1. The number should contain all the digits from 0 to N-1<br /><br />
2. The length of number can be atmost M i.e. it can have atmost M digits.<br /><br />
3. The difference between each adjacent digits should be one.<br /><br />
calculate the number of all such numbers.<br /><br />
Sherlock had no idea to solve this problem help him and prove you are better than him!!<br /><br />
For e.g. <br /><br />
1. if N=7 and M=8, you are supposed to use all the 0 to 6 digits and the length of the number can be atmost 8 digits. So, possible solutions are 6543210, 65432101, 56543210, 10123456. So, ans is 4.<br /><br />
Note: The numbers starting with 0 will be treated as if 0 have been removed from starting, for the above solution 0123456 will be considered as 123456(the length is 6 not 7) only and as 0 is not appearing in the number, it is not a valid solution
</p>
<h3>Input</h3>
<p>
First line <b>T</b> : no. of test cases <br />
For each test case: <b> N M </b>(space separated)
</p>
<h3>Output</h3>
<p>For each test case no. of such numbers that can be formed using all 0-(N-1) digits and which have atmost M digits in single line.<br /><br />
Output should be in Modulo 1000000007
</p>
<h3>Constraints</h3>
<li><b>0 ≤ t ≤ 100<b></b></b></li>
<li><b>2 ≤ N ≤ 10 </b></li>
<li><b>0 ≤ M ≤ 500 </b></li>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 4
5 5
3 6
7 14

<b>Output:</b>
3
1
18
1639
</pre><h3>Explaination</h3>
<p>Test case 1: <br /><br />
N=2 means 0 and 1 both has to be used only and M = 4 means at most 4 times these digits can be used. So, possible solutions are 10,101,1010 (3) //01 is not such a number <br /><br />
Test Case 2:<br /><br />
 N=5 (0-4), M=5 43210 is only possible solution by using all the digit.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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