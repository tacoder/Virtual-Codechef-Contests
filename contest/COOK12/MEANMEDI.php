<?php require("../../includes/header.php"); ?><h1>Mean Mean Medians</h1><div class="content">

<p>"Medians can't be very mean!", retorted Chef's brother. One would wish Chef's ego wouldn't<br />
	come in the way, but Chef has taken up the challenge to prove otherwise. He asks for your help. Given N numbers, select<br />
	K out of them, such that, the absolute difference between the mean and the median of the selected numbers, is as low<br />
	as possible.</p>
<p>Mean of K numbers is defined as the sum of the numbers divided by K.</p>
<p>Median of K numbers is defined as the number that appears at the order index, floor((K+1)/2);<br />
	that is, the I'th element in the sorted order of the K numbers (where numbering starts from 1),<br />
	where I = floor((K+1)/2). Note that, if K is even, the median would be the smaller value among the two values that<br />
	lie in the center.</p>
<p>Input format</p>
<p>The first line contains the number T, the number of test cases. In the following lines,<br />
	T test cases follow (without any newlines between them.)<br />
Each case consists of only 2 lines.<br />
The first line of each test case contains N and K, separated by a single space.<br />
The second line contains N positive integers, separated by a single space.</p>
<p>Output format</p>
<p>For each test case, print the minimum absolute difference between the mean and the median<br />
	that you can get, by selecting any K numbers, from the N numbers. Output the result rounded to 3 digits of precision<br />
	after the decimal.</p>
<p>Constraints</p>
<p>1 ≤ T ≤ 20<br />
1 ≤ N ≤ 60<br />
1 ≤ K ≤ N<br />
1 ≤ numbers ≤ 1200</p>
<p>Sample input</p>
<pre>2
8 2
4 9 1 3 5 9 4 10
5 4
10 7 4 5 9

</pre><p>Sample output</p>
<pre>0.000
0.500

</pre><p>Explanation</p>
<p>In the first case, you can select [4, 4].</p>
<p>In the second case, you can select [10, 7, 4, 9]. The mean would be 7.500, where as<br />
	median would be 7.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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