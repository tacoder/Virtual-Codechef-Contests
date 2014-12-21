<?php require("../../includes/header.php"); ?><h1>Shooting Birds</h1><div class="content">
<p>
You are a bird shooting enthusiast. You are standing on position 0 and a flock of birds (assume infinitely many birds) is flying away from you at 1m/s.<br />
The flock of birds is initially at 1m away from you.
</p>
<p>
Your rating is (P, N) and your time lag is (T, R). This means the following.</p>
<ul>
<li>
If P is your precision rating : At every turn, beginning when the birds are at 1m position, you take a shot at one of the birds in the flock.<br />
Suppose at this turn, if the flock of birds is Xm away from you, then probability that shot is successful is 1 &frasl; X<sup>P</sup>.
</li>
<li>
<p>N is your range : You can only shoot at the flock of birds if it is at a distance less than or equal to N.
</p></li>
<li>
T is your reload time : After every shot, you reload your gun, and that takes time T. The next time you shoot, thus the flock of birds is T more meters away than it initially was.
</li>
<li>
R is your rejoicing time :D : If you are successful in shooting a bird, you rejoice your success and spend an extra amount of time R in reloading<br />
(taking a total of T + R time before the next shot).
</li>
</ul>

<p>
Assume that you have infinitely many bullets.
</p>
<p>
Given N, P, T, and R. Find the expected number of birds you will shoot down!
</p>
<h3>Input</h3>
<p>
A single line containing space separated 4 numbers N, P, T, and R, in that order. P is a real number while others are positive integers.</p>
<h3>Output</h3>
<p>
A single line containing the expected number of birds you will shoot down. The output should be correct to within 10^(-6) of the actual answer.
</p>
<h3>Constraints</h3>
<p><ul>
<li> P is a real number, 1 &lt; P &lt; 100 </li>
<li> 1 &le; N &le; 10^18 </li>
<li> 1 &le; T &le; 10^5 </li>
<li> 1 &le; R &le; 10^5 </li>
<li> Further, ln(N) &lt; 14 (P - 1) </li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
10 2 3 4

<b>Output:</b>
1.015625
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>