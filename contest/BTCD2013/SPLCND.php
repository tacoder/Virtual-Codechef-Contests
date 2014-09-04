<?php require("../../includes/header.php"); ?><h1>Timon & Pumba</h1><div class="content">
<p> </p>
<p>Timon and Pumba from Lion's King, found new type of bugs. Since both of them are fond of eating bugs &amp; this being a really yummy one.<br />
They decided to collect as many as possible &amp; then divide among themselves.<br />
Each of the bug has a yumminess attached to it, i.e. two bugs with yumminess X &amp; Y respectively, where X &gt; Y means that bug with yumminess X is more yummy.<br /><br />
Timon &amp; Pumba both learnt addition of numbers in binary at school. Given two numbers X &amp; Y in decimal, they will convert them to binary &amp; add them.<br />
Timon is good at math but Pumba is a bit weak. He didn't learn the addition properly. Instead of forwarding the carry obtained from addition of bits at same position, he forgets it.<br /></p>
<pre>
eg 
  4 + 6 = 2
  100 + 110 = 010
</pre><p>  At most significant bit, he forgot to take care of the carry.<br /><br />
  Not only this he forgets it any other position too.<br /></p>
<pre>
  11 + 6 = 13
  1011 + 0110 = 1101
  </pre><p>  Timon know the situation &amp; he wants to utilize his knowledge to get the maximum he can get. He'll divide the collection they get into two sets keeping these things into mind  but he'll try to maximize the sum for his share. He'll also calculate the sum infront of Pumba to show that they both got equal share (ofcourse via Pumba's method). Sometimes its not possible to divide the collection.<br /><br />
    But here's the situation, Timon is too lazy. He needs your help to get this division done. Can you help him?
  </p>
<p> </p>
<h3>Input</h3>
<p>he first line of the input gives the number of test cases, T. T test cases follow. Each test case is described in two lines.<br /><br />
	The first line contains a single integer N, denoting the number of bugs they collected. The next line contains the N integers Ci <br /><br />
	separated by single spaces, which denote the yumminess of each bug.
</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output one line with total yumminess of the share Timon will keep. If it's not possible for Timon to divide equally, "NO" should be printed without the quotes on that line.
</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>Ci</b> ≤ <b>10^6</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2                   
3                                        
2 4 6
5
1 2 3 4 5
<b>Output:</b>
10
NO
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2013</td>
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