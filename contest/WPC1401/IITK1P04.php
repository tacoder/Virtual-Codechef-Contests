<?php require("../../includes/header.php"); ?><h1>Electric Town</h1><div class="content">
<p>
Electric town has only N electricity powerhouses. All these powerhouses do is generate power and transmit it to other powerhouses.
</p>
<p>
Also there are unidirectional power cables between these powerhouses. These cables go in one direction from powerhouse X to powerhouse Y.
</p>
<p>
Each of these cables also have a maximum integral capacity, which is an upper limit on the amount of power they can transfer. These capacities will be given.
</p>
<p>
Now, say a powerhouse receives R amount of power from other powerhouses, and gives out a total of S amount of power out to other powerhouses.<br />
Further, suppose it generates G amount of power. Then the amount of power going out of the powerhouse should be the sum of the power it receives, and the power it generates. That is, S = R + G.<br />
Since electric town is a very advanced town, G could be anything (non negative).
</p>
<p>
You are Jaylal, a mafia in the town, and you have a special superconducting (again unidirectional) cable. This cable has infinite capacity, and can hence transfer any amount of electricity.<br />
You can connect this cable between from powerhouse A to powerhouse B, and since you control this cable, you will obtain the electricity that flows through this cable. You add this cable to the network, and the powerhouses continue to transmit power<br />
in the same fashion as before, without noticing that there is another cable.
</p>
<p>
Of course you want to be able to get the maximum electricity. What is the maximum electricity that could be travelling in this cable?<br />
<br />You have to answer this question T times, for T different pairs of powerhouses A, B that you connect this cable in. All these answers have to be independently outputted. (see sample)</p>
<h3>Input</h3>
<p>
First line of the input contains two space separated integers N and M<br />
denoting the number of powerhouses and number of cables respectively.
</p>
<p>
For next M lines, each line contains three sapce separated integers U V W, denoting that there is a cable directed from powerhouse U to powerhouse V with electric capacity W.
</p>
<p>
A single line containing an integer T :  the number of different layouts of the superconducting cable you are going to try out.<br />
<b> T </b> lines follow, each containing two integers A and B denoting that the cable is connected from <b> B to A </b>.</p>
<h3>Output</h3>
<p>
Output T lines each containing a single integer corresponding to the maximum electricity you can hijack in that case case.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 300</li>
<li>1 ≤ M ≤ N * (N - 1) / 2</li>
<li> 1 ≤ W ≤ 10^6 </li>
<li>1 ≤ U, V ≤ N</li>
<li>0 ≤ G, G is unbounded from above (not given in input) </li>
<li>There won’t be any duplicate edge or self loop (apart from the extra edge you added of infinite capacity)</li>
<li> 1 ≤ T ≤ 10 </li>
<li> 1 ≤ A, B ≤ N </li>
<li> A != B </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
1 2 5
2 3 3
2
1 3
1 2

<b>Output:</b>
3
5

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>1 sec</td>
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