<?php require("../../includes/header.php"); ?><h1>Superpowers of 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/SPOTWO.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/SPOTWO.PDF"> Russian</a>.</h3>
<p>Cyael is a very gifted girl who loves Magic (she even reached the finals on a very famous tournament in Byteland ;) ) and Computer Science. As we know, CS is a very vast subject and Cyael learns what she can, little by little, by reading the editorials of codechef.com, her favourite programming website.</p>
<p>Today, she came across a problem that was about calculating powers of two, and she got bored of it really fast, as she considers she knows all there is to know about powers of two. She knows how to compute even very big powers, like powers of 10, so it's obvious that for her, powers of two have no secrets :D</p>
<p>But her friend Lira, as she was tired of hearing her boasting about her skills for calculating powers, decided to challenge her with a brand new task: computing what she calls, <b> SuperPowers of 2</b> . </p>
<p> Cyael: "Okay Lira, tell me about SuperPower of 2 so that I can solve one more problem and prepare for Codechef's November Long Challenge!! It's less than a month away!"</p>
<p> Lira: "I define the <b>N<sup>th</sup></b> Superpower of 2 as being the number <b>(2<sup>N_bin</sup>)<sup>2</sup> </b>, where <b>N_bin</b> stands for the decimal number encoded by the representation in base 2 of the number N.</p>
<p>So, for example, the 2<sup>nd</sup> SuperPower of 2 is then equal to the number:</p>
<p>(2<sup>10</sup>)<sup>2</sup> = 1048576</p>
<p> because, <b> N = 2 </b>, and its binary encoding is <b>10</b> in decimal it is <b>ten</b>. So <b>2<sup>10</sup> = 1024</b> and <b>1024<sup>2</sup> = 1048576</b> </p>
<p>Since the answer can be large, you are asked to compute SuperPowers of 2 modulo <b>1000000007</b>."</p>
<p>After some time, Cyael finally solved the problem and decided to call Lira:</p>
<p> Cyael: "Well, I admit I struggled more than I'd have expected on this problem... You should consider becoming a problem setter and set this problem for Codechef... Do you want me to call Bruno and ask him to set this problem on your behalf? He always finds a way of writing a fun problem statement!!" </p>
<p> Lira: "Wooow!! That means Codechef community would solve my problem, modified by Bruno himself? Please do so, I'd love it!!!" </p>
<p> And now, here I am (yes, Bruno :D ) setting Lira's problem to all of you, but, with some differences regarding Lira's initial version, which hopefully you will appreciate. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>Then on the following T lines, there is an integer <b>N</b>, denoting the index of the SuperPower of 2 you need to compute modulo <b>1000000007</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required value: the <b>N<sup>th</sup></b> SuperPower of 2 modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 600000</li>
<li>T = 100000 on each official test-case file.</li>
<p><b>Note: Your code will be judged against several input files.</b>
</p></ul>
<h3>Example</h3>
<pre><b>Input:</b>
<p>100000
1
2
(and 99998 more test cases...)</p>

<b>Output:</b>
4
1048576
(and 99998 more answers...)
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2013</td>
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