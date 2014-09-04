<?php require("../../includes/header.php"); ?><h1>Willy Wonka and Candies</h1><div class="content">
<p> </p>
<p>
<h3>Problem description</h3>
</p>
<p>Willy Wonka has gone to collect berries for his candy. He finds a rather odd kind of bush with berries growing on the bush in a straight line.Willy also observed that the sweetness imparted by the berries to the candy produced depended on the berries he plucked.</p>
<p>
He saw that the sweetness imparted by the berry he plucked would depend on whether the neighboring berry will also be plucked or not.</p>
<p>
For example, if berries have indexes 1 2 3 4 5 , then selecting berry 3 will affect sweetness imparted by 2 and 4,<br />
after this if 4 is selected sweetness imparted by 2 is not affected (but sweetness imparted by 5 changes as it should) but when 1 is selected sweetness imparted by 2 is again affected.</p>
<p>
Willy was able to determine how much sweetness each berry could impart to the candy for each case.<br />
</p>
<p>1.If neither the left nor the right immediate neighbor is selected then the sweetness imparted is A.<br /><br />
2.If one of the left or right immediate neighbors is selected then sweetness imparted is B.<br /><br />
3.If both the immediate neighbors have been selected then sweetness imparted is C.<br /></p>
<p>Though there is no relation between A,B,C of the berries.
</p>
<p>
Now Willy wants to decide which berries to select so that the sweetness of the candy formed is maximum.He does not need to use all berries.</p>
<p>
Help Willy find the maximum sweetness he can gain from the berries.The berries cannot be moved around the bush  and the sweetness is additive in nature, as in, if we add two berries total sweetness is sum of both the berries.
</p>
<h3>Input</h3>
<p>A test file may have several test cases. Each test case starts with N ( N ≤ 10^6 ) the number of berries on the bush.The next N lines contain description of berries. Each line contains three integers A ( 0 ≤ A ≤ 100 ) , B ( 0 ≤ B ≤ 100) and C ( 0 ≤ C ≤ 100) in this order, which represent the sweetness values of the ith berry.The input data will end with end of file.</p>
<h3>Output</h3>
<p>The output should consist of one integer in one line for each test case which will be the maximum sweetness that can be obtained for that case.</p>
<h3>Example</h3>
<pre><b>Input 1:</b>
1
1 2 3

<b>Output:</b>
1
</pre><pre><b>Input 2:</b>
2
1 2 3
2 2 1

<b> Output:</b>
4
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Case 1:</b><br />
As there is only one berry the berry can only have A as its sweetness.
</p>
<p><b>Case 2:</b><br />
Here there are two berries and the cases are <br /><br />
1. select only first : total=1 (A of first)<br /><br />
2. select only second : total=2 (A of second)<br /><br />
3. select both first and second : total= 2+2=4 (sum of B of both)</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-01-2014</td>
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