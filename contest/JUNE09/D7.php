<?php require("../../includes/header.php"); ?><h1>Alien Clock</h1><div class="content">

<p>The Chef has been kidnapped by aliens ( they want to utilize his excellent cooking skills :P ) and has been transported to the alien planet "ZX532". Interestingly, "ZX532" uses a different time scale which has Y AlienHours on the face of a clock (instead of the 12 hours that we have).  They also have 'X*Y' AlienMinutes (instead of the 60 that we have).  X is defined as the number of minute divisions between each hour (the earth clock has X=5).</p>
<p>The Chef has been forced to cook a lot of dishes by the aliens. He is short of ingredients and hence needs to go out to the market to get them. However when he returns, he makes an interesting observation. The hands of AlienClock have exactly swapped position from the time he left (the big hand and the little hand have switched)!</p>
<p>Given the times between which The Chef might have left and the times between which The Chef may have returned, you are supposed to find out the actual time when he left.  If there is more than one possibility, print the one that maximizes the amount of time that The Chef is out.</p>
<p><b>Details of the Clock</b></p>
<p>The AlienClock is circular and has exactly 2 hands : the hour hand and the minute hand. The whole circumference of the AlienClock is divided into Y divisions , each of which is further divided into X subdivisions [ X and Y are both positive integers ]. The clock is not discrete but continuous (the hands move continuously instead of moving at certain intervals such as every second, etc.... ).</p>
<h3>Input</h3>
<p>First line of input contains t (1≤ t ≤ 100) - the number of test cases. Each test case contains 2 lines each. The first line contains 2 space separated integers , X and Y (same as those specified in the problem statement; X ≤ 10<sup>9</sup> and Y ≤ 10<sup>9</sup> ).</p>
<p>The next line contains 8 space separated integers (a,b,c,d,e,f,g,h; 0 ≤ a ≤ c &lt; Y; 0 ≤ e ≤ g &lt; Y; a ≤ e; 0 ≤ b,d,f,h &lt; X*Y ): specifying the times between which The Chef might have left (a:b =&gt; a hours and b minutes TO c:d =&gt; c hours and d minutes) and the times between which The Chef may have returned (The Chef returns sometime between e:f and g:h).</p>
<p>The interval at which The Chef re-enters the kitchen will never start prior to the interval at which he first leaves the kitchen to purchase the ingredients.</p>
<h3>Output</h3>
<p>The output should contain one line for each test case specifying the time when The Chef left the kitchen. This should be in the form (h:m =&gt; h hours and m minutes). h will be an integer, and m should be rounded to 2 decimal places. In case, there is no solution possible, output -1 for that test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 12
1 0 2 0 4 0 5 0
5 12
3 30 4 0 5 0 6 0
5 12
3 0 4 0 5 0 6 0

<b>Output:</b>
1:20.56
-1
3:26.43
</pre><p>
<br />
<b>Note: </b>Be careful with precision.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-05-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 - 10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>