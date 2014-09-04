<?php require("../../includes/header.php"); ?><h1>Lucky on Mars</h1><div class="content">

<p><i>Freakin' news has recently claimed that they have discovered a civilization on mars and that they have established contact with the martians. Following is a summary of the tea hour breakin' news on freakin' news :</i></p>
<p>Every morning, the martian king determines his lucky number(s) for the day using the following unusual algorithm :<br /></p>
<pre>Select a positive integer n.
Write out a permutation f of (1,2,...n) on a board from left to right. (f(1) is leftmost, f(n) is rightmost).
While 3 or more numbers remain on the board 
	Erase all numbers at position i from the left for which i is a power of 2.
The number(s) which remains(remain) at the end is(are) the lucky number(s) for the day. </pre><p> <br /></p>
<p> (Note : It is trivial to prove that either 1 or 2 numbers remain at the end.) <br /></p>
<p> The king has asked freakin' news to write a program which determines the lucky numbers for the day given n and f. <i>Your job is to do this task for freakin' news.</i><br /></p>
<h3>Input </h3>
<p>The first line of input contains a single integer T : the number of test cases.<br /><br />
Lines 2,3,...2T+1 describe the test cases (Test case i is described by the lines 2i and 2i+1).<br /><br />
The first line of each test case contains the single integer n. The next line consists of n space seperated integers f(1), f(2), ... f(n). It is guaranteed that (f(1),f(2),...f(n)) is a permutation of (1,2,...n).<br /></p>
<h3>Output </h3>
<p>For each test case output a single line as follows :<br /><br />
If 1 number remains at the end :<br /><br />
	On the only line of output, output a single integer : the lucky number for the day.<br /><br />
If 2 numbers remain at the end :<br /><br />
	On the only line of output, output two space seperated integers : the two lucky numbers for the day. The two numbers must appear from left ro right in the same order in which they appeared in the input.<br /></p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=10<br /><br />
1&lt;=n&lt;=100000<br /><br />
(f(1),f(2),...f(n)) is a permutation of (1,2,...n).<br /></p>
<h3>Sample Input </h3>
<p>2<br /><br />
4<br /><br />
4 1 2 3<br /><br />
9<br /><br />
8 6 9 3 4 7 1 2 5<br /></p>
<h3>Sample Output</h3>
<p>2<br /><br />
7 5<br /></p>
<h3>Explanation </h3>
<p>1 :<br /><br />
Initial <br /><br />
4 1 2 3<br /><br />
After Round 1 <br /><br />
2<br /></p>
<p>2 :<br /><br />
Initial <br /><br />
8 6 9 3 4 7 1 2 5<br /><br />
After Round 1 <br /><br />
9 4 7 1 5<br /><br />
After Round 2 <br /><br />
7 5<br /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-03-2012</td>
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