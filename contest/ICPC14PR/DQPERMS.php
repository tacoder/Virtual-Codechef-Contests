<?php require("../../includes/header.php"); ?><h1>Denethors Decryption of Dequeue permutations</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Denethor's Decryption of Dequeue permutations<br /> </h2>
<p> <i>'Though the Stewards deemed that it was a secret kept only by themselves, long ago I guessed that here in the White Tower,     one at least of the Seven Seeing Stones was preserved. In the days of his wisdom Denethor did not presume to use it, nor to challenge Sauron,     knowing the limits of his own strength. But his wisdom failed; and I fear that as the peril of his realm grew he looked in the Stone and was deceived:     far too often, I guess, since Boromir departed. He was too great to be subdued to the will of the Dark Power, he saw nonetheless only those things which     that Power permitted him to see.'</i> - Gandalf.</p>
<p> Sauron and Saruman have been communicating from large distances using the Seeing Stones. Denethor, with great difficulty has been able to break into their channel of communication using his strength of will. Despite this however, it seems that their communication has been encrypted. Gondor's spies in Isengard have found out the encryption algorithm they use and have reported back to Denethor.</p>
<p> The algorithm is as follows :<br /> We refer to a dequeue as a double-ended queue. We define a "dequeue permutation of <b>N</b>" as a permutation of 1 to <b>N</b> that can be got by starting from a dequeue having elements 1, 2, 3, ..., <b>N</b> (in that order with 1 at the front and <b>N</b> at the back) and performing any sequence of <b>N</b> pop_front() or pop_back() operations. </p>
<p> Note that not all permutations of 1 to <b>N</b> are dequeue permutations. For example, with <b>N</b> = 3, you have 3-1-2, 1-3-2 etc. as dequeue permutations whereas 2-1-3, 2-3-1 aren't (you can't have 2 right at the beginning since its not at any end of the dequeue).</p>
<p> If Sauron wants to encrypt the number <b>K</b> and send it to Saruman, he would instead send the <b>K</b>'th lexicographically smallest <b>(0-based indexed)</b> dequeue permutation of <b>N</b>. That is, if Sauron wanted to send '0' to Saruman, he would just send 1-2-3-...-<b>N</b> (since this is clearly the smallest lexicographic dequeue permutation of <b>N</b>).</p>
<p> Sauron is transmitting the size of his army to Saruman, so that they can coordinate an attack on the Men of Rohan and Gondor. Since Sauron's will is so powerful, Denethor is able to get only vague glimpses of the numbers, and he is able to remember only the first half (<b>floor(N/2)</b> elements) of the permutation. Further, since these images are so vague, his understanding of the numbers happens out of order. For example, Denethor may understand that the 5th number of the permutation is 4, and later on only understand that the 3rd number was 3. </p>
<p> Help him estimate the minimum and maximum possible size of Sauron's army (value of <b>K</b>), given the number <b>N</b>, and incremental understanding of the first half of the permutation, not necessarily in order.</p>
<p> <b>NOTE 1:</b> Since the values to be output can be rather large, output the values modulo 1,000,000,007.</p>
<p> <b>NOTE 2:</b> It may be the case that Denethor's understanding of the permutation is flawed. If it is not possible to have a dequeue permutation satisfying all the conditions seen so far, output -1.</p>
<p> <b>NOTE 3:</b> A permutation p1 is lexicographically smaller than p2 if at the first position where they differ, p1's value is smaller than p2's.</p>
<h3>Input (STDIN):</h3>

<p> The first line consists of the integer <b>T</b>, the number of test cases.<br /> Each test case begins with a single integer <b>N</b>.<br /> This is followed by exactly <b>floor(N/2)</b> lines containing 2 integers each: <b>i</b> and <b>j</b>, denoting that Denethor has understood that the <b>i</b>'th element <b>(1-based)</b> of the supposed permutation is <b>j</b>.</p>
<h3>Output (STDOUT):</h3>

<p> For each testcase, output exactly <b>floor(N/2)</b> lines, one for each <b>(i,j)</b> pair. If the recollections till now cannot all be feasible, output '-1' on a line. Else output two space-separated integers: the minimum and the maximum possible value of Sauron's army, <b>K</b>, that are consistent with all the observations seen so far.<br /> Between successive test cases, there should not be any blank lines in the output.</p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt; 3 <br /> 2 &lt;= N &lt;= 100,000<br /> 1 &lt;= i &lt;= floor(N/2)<br /> 1 &lt;= j &lt;= N<br /> All (i, j) pairs are distinct. And for two pairs (i1, j1) and (i2, j2), you have that i1 != i2 and j1 != j2.</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 3<br /> 1 3<br /> 32<br /> 1 1<br /> 3 2<br /> 2 32<br /> 4 4<br /> 5 5<br /> 6 6<br /> 7 7<br /> 8 8<br /> 9 9<br /> 10 10<br /> 11 11<br /> 12 12<br /> 13 13<br /> 14 14<br /> 15 15<br /> 16 3</span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2 3<br /> 0 73741816<br /> 536870912 805306367<br /> 536870912 805306367<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1<br /> -1</span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> For the first test case, for N = 3, there are 4 dequeue permutations, lexicographically ordered as 1-2-3, 1-3-2, 3-1-2, and 3-2-1. Denethor sees the first number of the dequeue permutation as 3, and concludes that the permutation can be either 3-1-2, or 3-2-1.<br /> In the second test case, we see that<br /> (a) the 1st number is 1.<br /> (b) the 3rd number is 2 ... this means that the 2nd number has to be 32.<br /> (c) the 2nd number is 32 ... this does not add any new information.<br /> (d) the 4th number is 4. But this is not possible, since the 4th number can now either be 3 or 31. <br /> Hence it is inconsistent (and none of the further observations can make it consistent).<br /> Also notice that in the 2nd test-case, the values have been output modulo 1,000,000,007.</p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>