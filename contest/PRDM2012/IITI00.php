<?php require("../../includes/header.php"); ?><h1>Pleasing the Martian King</h1><div class="content">

<p> <i>Freakin' news has recently claimed that they have discovered a civilization on mars and that they have established contact with the martians. Following is a summary of the dawn hour breakin' news on freakin' news : </i><br /></p>
<p> Occassionally, the martian ministers feel the need to please their king. For this purpose, they give the king a trivial problem to solve and heap excessive praise upon him when he presents the correct solution. <br /></p>
<p> This time they have given the king the following problem : <br /><br />
Given two positive integers n,k and n numbers a[1],a[2],...a[n] find the maximum of (b[1]a[1]+b[2]a[2]+.....b[n]a[n]) subject to the restrictions : <br /><br />
1) b[i] is either 1 or (-1), for all i, 1&lt;=i&lt;=n. <br /><br />
2) Exactly k b[i]'s are 1. The remaining (n-k) b[i]'s are (-1). <br /></p>
<p> To make the task even easier for the king, the ministers have given the king the sequence a[1],a[2],...a[n] sorted in non-decreasing order. </p>
<p> The king, being lazy, has outsourced the task to freakin' news. <i>Your job is to do this task for freakin' news.</i> <br /></p>
<h3> Input Format : </h3>
<p>The first line of input contains a single integer n. The next line consists of n space seperated integers a[1], a[2], ... a[n]. The sequence a is guaranteed to be sorted in non-decreasing order. <br /></p>
<h3> Output Format : </h3>
<p>On the only line of output, output a single integer : the maximum of (b[1]a[1]+b[2]a[2]+.....b[n]a[n]) subject to restrictions 1 and 2. <br /></p>
<h3> Constraints : </h3>
<p>2&lt;=n&lt;=100 <br /><br />
0&lt;=k&lt;=n <br /><br />
|a[i]|&lt;=1000 <br /><br />
The sequence a is sorted in non-decreasing order i.e. a[1]&lt;=a[2]&lt;=....&lt;=a[n] <br /></p>
<h3> Sample Input : </h3>
<p>2 1 <br /><br />
-4 -4 <br /></p>
<h3> Sample Output : </h3>
<p>0 <br /></p>
<h3> Sample Input : </h3>
<p>2 0 <br /><br />
-2 5 <br /></p>
<h3> Sample Output : </h3>
<p>-3 <br /></p>
<h3> Explanation : </h3>
<p>1 : There are two possibilities for the sequence b : (+1,-1) and (-1,+1). Both lead to sum 0. <br /><br />
2 : There is only one possibility for the sequence b : (-1,-1). This leads to the sum -3. <br /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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