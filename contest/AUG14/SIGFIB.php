<?php require("../../includes/header.php"); ?><h1>Team Sigma and Fibonacci</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/SIGFIB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/SIGFIB.pdf">Russian</a>.</h3>
<p><span>Sigma and Fibonacci were two geeky friends. As ACM ICPC is near, they have started forming teams. Sigma loved summing series and Fibonacci loved playing with fibonacci numbers. They made Gopu as their ACM ICPC Coach. To train them up, Gopu gave them a challenge which will require both of their coordination to solve it. The challenge given by Gopu is described below:</span></p>
<p><span>Gopu gave them two numbers <strong>M</strong> and <strong>N</strong> and asked them to solve : <br /><span> ( ∑ ( 6 * x * y * z * Fibo[x] * Fibo[y] * Fibo[z] ) ) % M , where x + y + z = N.<br /></span></span><span>Here x, y, z ≥ 0 and are integers.</span></p>
<p><span>Fibo is the Fibonacci number define as follows.<br /> </span></p>
<ul>
<li><span>Fibo[0] = 0</span></li>
<li><span>Fibo[1] = 1</span></li>
<li><span>Fibo[i] = Fibo[i-1] + Fibo[i-2] ∀  i ≥ 2 .<br /> </span></li>
</ul>
<p><span> Now Gopu is wondering whether he will be able to determine whether they have calculated the solution of the problem correctly or not ! Help Gopu to find the correct answers , so that he can judge the solution for the team.<br /></span></p>
<h3><span>Input
<p></p></span><span></span></h3>
<p>First line of input contains an integer <strong>T</strong> denoting the number of test cases. Each test case begins in a new line, containing two space separated numbers representing <strong>M</strong> and <strong>N</strong> respectively.</p>
<h3><span>Output</span></h3>
<p><span> For each test case, output answer as stated above in a new line. <br /></span></p>
<h3><span>Constraints<br /></span></h3>
<ul>
<li><span>Sum of </span><strong>M</strong><span> over all test cases will be ≤ 10</span><sup>6</sup><span>.</span></li>
<li><span>0 ≤ <strong>N ≤</strong>  10<sup>18</sup></span></li>
<li><span>1 ≤ <strong>M ≤</strong>  10<sup>5</sup></span></li>
</ul>
<h3><span>Example</span></h3>
<pre><span><strong>Input:</strong>
4<br />100 3<br />100 4<br />100 9<br />100 10<br />
<strong>Output:</strong>
6<br />36<br />66<br />60<br />
</span></pre><h3><span>Explanation for first test case:</span></h3>
<p><span> In the first case, we have the following 10 terms for <b>N</b> = 3:<br />6 * 0*0*3*Fibo[0] * Fibo[0] * Fibo[3]<br />6 * 0*1*2*Fibo[0] * Fibo[1] * Fibo[2]<br />6 * 0*2*1*Fibo[0] * Fibo[2] * Fibo[1]<br />6 * 0*3*0*Fibo[0] * Fibo[3] * Fibo[0]<br />6 * 1*0*2*Fibo[1] * Fibo[0] * Fibo[2]<br />6 * 1*1*1*Fibo[1] * Fibo[1] * Fibo[1]<br />6 * 1*2*0*Fibo[1] * Fibo[2] * Fibo[0]<br />6 * 2*0*1*Fibo[2] * Fibo[0] * Fibo[1]<br />6 * 2*1*0*Fibo[2] * Fibo[1] * Fibo[0]<br />6 * 3*0*0*Fibo[3] * Fibo[0] * Fibo[0]<br />Here 6*1*1*1* Fibo[1] * Fibo[1] * Fibo[1] = 6 is only the non-zero term, the answer is 6.<br /></span></p>
<p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/devuy11">devuy11</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-04-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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