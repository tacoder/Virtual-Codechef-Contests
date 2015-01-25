<?php require_once("../../includes/header.php"); ?><h1>Gabba sprint</h1><div class="content">
<p class="p1"><span class="s1">Virat Kohli and Rohit Sharma are warming up for the World Cup at the Brisbane Cricket Ground, commonly known as "The Gabba". Their coach has asked them to go to the ground at the crack of dawn, and then jog around the stadium in laps. The Cricket Ground has poles spaced equally apart and numbered sequentially from 1 to N. The first M-1 poles lead up to the entrance of the stadium, and the poles numbered M, M+1, ... N are arranged circularly around the stadium, with pole M being next to pole N. Both players start running from pole 1. They always go from pole i to pole i+1, except when i = N, where they go from pole N to pole M.</span></p>
<p> <img src="https://codechef_shared.s3.amazonaws.com/download/AMR14I.png" /><br />
</p><p class="p4"><span class="s1">Due to their different levels of fitness - something that their coach is quite upset about with Virat, that being another story - they have different running speeds P and Q, measured in poles/minute. They have been asked to run for ‘S’ minutes each. Since they can’t keep running for long, the coach has asked them to do short sprints of 1 minute each. First, Virat sprints and covers P poles in 1 minute and stops. Then Rohit sprints and covers Q poles in 1 minute and stops. Virat starts again, and they keep doing this for 2*S minutes (S minutes each). Virat and Rohit are considered to meet if they are at the same pole at the end of some  minute. Can you tell how many times they will meet during their jogging routine?</span></p>
<p class="p5"> </p>
<p class="p6"><span class="s1"><b>Input:</b></span></p>
<p class="p4"><span class="s1">The first line contains the number of test cases, T. This is followed by T lines, one for each test case. Each test case contains five integers - N, M, S, P and Q.</span></p>
<p class="p6"><span class="s1"><b>Output:</b></span></p>
<p class="p4"><span class="s1">For each test case, output the answer on a new line.</span></p>
<p class="p6"><span class="s1"><b>Constraints:</b></span></p>
<p class="p6"><span class="s1">1 ≤ T ≤ 100</span></p>
<p class="p6"><span class="s1">1 ≤ M &lt; N ≤ 500</span></p>
<p class="p6"><span class="s1">1 ≤ S ≤ 100000</span></p>
<p class="p6"><span class="s1">1 ≤ P,Q ≤ 500</span></p>
<p class="p4"><span class="s1">P ≠ Q</span></p>
<p class="p6"><span class="s1"><b>Sample Input:</b></span></p>
<p class="p6"><span class="s1">2</span></p>
<p class="p6"><span class="s1">4 1 4 2 3</span></p>
<p class="p4"><span class="s1">5 3 10 1 2</span></p>
<p class="p6"><span class="s1"><b>Sample Output:</b></span></p>
<p class="p6"><span class="s1">1</span></p>
<p class="p4"><span class="s1">3</span></p>
<p class="p6"><span class="s1"><b>Explanation:</b></span></p>
<p class="p7"><span class="s1">For the first example, Kohli’s position at the end of his 1st, 2nd, 3rd &amp; 4th minutes of run is {3, 1, 3, 1} respectively. While Rohit’s position at the end of his 1st, 2nd, 3rd &amp; 4th minutes of run is {4, 3, 2, 1} respectively. Therefore, they meet exactly once after 8 minutes (their 4 minutes) at pole 1.</span></p>
<p class="p6"><span class="s1">For the second example, they would meet at the end of their 3rd (total 6th), 6th (total 12th) &amp; 9th (total 18th) minute of run.</span></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/murdocc007">murdocc007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>