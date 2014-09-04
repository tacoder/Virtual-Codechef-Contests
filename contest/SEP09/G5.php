<?php require("../../includes/header.php"); ?><h1>Chemical reactions</h1><div class="content">

<p>Johnny is preparing a chemical experiment for school. The experiment involves a certain number of different liquid chemical substances which have been mixed together and are currently reacting with each other. There are n different types of liquid substances. However, each substance appears in k different variants called isomers, and Johnny cannot distinguish between the different isomers...</p>
<p>
We can assume that time is discrete and measured in minutes. During each minute, each possible reaction is described as follows: <strong>a b ratio type</strong>, meaning that <strong>ratio</strong> of liquid <strong>a</strong> (i.e., part of total amount, no matter which isomer) transforms into liquid <strong>b</strong>. If the reaction type is <em>normal</em>, then isomer i of liquid <strong>a</strong> transforms into isomer i of liquid <strong>b</strong>. If reaction type is <em>special</em>, then isomer i transforms into isomer i+1.</p>
<p>
At time 0, each substance is in its initial isomer form, having number 1. For the special threshold value k, once isomer k of any substance passes through a special reaction, it transforms into solid state matter and precipitates from the mixure, no longer taking part in reactions (so, for all practical purposes, we can say it disappears).<br />
Moreover, during each minute, a small part of each liquid disappears (transforms into gaseous state and evaporates). From Johnny's point of view, the evaporation happens just before the reactions in any given minute. </p>
<p>Starting from time 0, exactly once a minute, Johnny takes note of the amount of each liquid in the mixture. He does this for a very, very long time, and then he sums the obtained amounts for each liquid (i.e., for each liquid, he adds the amount there was at time 0, at time 1, at time 2, etc.). The resulting n numbers are the result of the experiment. However, Johnny would like to know the results of experiment beforehand, so he asks you for a little help. Compute the results of his experiment, knowing that initially he just mixes the same amount (1 unit) of isomer 1 of each substance.</p>
<h3>Input</h3>
<p>First, 1≤n≤100, then 1≤k≤1000.  Then, n floating point numbers follow, describing the proportion of liquid of each type that evaporates in each minute. Then, one integer m&lt;10000, the number of reactions, followed by m reaction definitions. Each definition consists of integers 0≤a&lt;n, 0≤b&lt;n, floating point 0&lt;r≤1, and integer s=0 or 1,  meaning that part r of the total amount of liquid a transforms into liquid b every minute (in the normal way if s=0, and in a special reaction, otherwise). No two pairs (a,b) are the same between definitions, i.e., always a != b.</p>
<h3>Output</h3>
<p>Exactly n numbers, representing the measured results of the experiment for each substance. Precision up to at least 6 digits after the decimal point is required.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2
10
0.1 0.1
2
0 1 0.5 1
1 0 0.5 1

<strong>Output:</strong>
8.6556936725 8.6556936725 
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>