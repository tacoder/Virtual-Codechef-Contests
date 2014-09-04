<?php require("../../includes/header.php"); ?><h1>Sinking Time</h1><div class="content">

<p>Under the moon light, over the smooth dark water surface, Titanic was sailing along. Quite beautifully, wih sparkling light, it seemed to be flying.<br />
But air does not have ice bergs. <br />
A sudden crashing sound and a piece of ice floating by. But the depth is far greater than what it looks on the surface. <br />
Our ship is hit and has taken serious damages. The iceberg has damaged one of the sectors in the lowermost level. ( Where were the Lookers looking from the Look Out?? !! )<br />
<br />
The captain has assigned you the job of finding the total time in sinking of the ship. <br />
The ship is considered sunk only when all the sectors at all levels are drowned completely in water. </p>
<p>A ship is represented in sectors as below: </p>
<pre>
+ + + + +     
 + + + +
  + + +
</pre><p>
n is the number of sectors in the topmost level, k is the number of levels. </p>
<p>The first(topmost) level contains n sectors, 2nd contains n-1 sectors, and the k-th(lowermost) sector contains n-k+1 sectors.<br />
Water starts getting into a sector only when one(or both) of the following conditions are met: <br />
* a neighbor of the sector is completely drowned. <br />
* both the sectors under a sector are completely drowned. </p>
<pre>
   +  a  +
     b  c  
</pre><p>
Here, "a" will drown when both "b" and "c" are completely drowned. OR either of the neighbors ( + ) are completely submerged into water.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases (about 10). t test cases follow. <br />
For each test case, the first line contains three integers n(&lt;=1000), k(<n), m(the damaged sector of the lowermost level, 1-based). <br />
The next k lines contain the integers denoting the time taken for the sectors in k-th level to drown completely.</n),></p>
<h3>Output</h3>
<p>Display t lines each having the single integer, the total time after which, the ship will be completely submerged in water.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
7 2 3
2 3 1 7 5 9 6
4 6 5 4 7 2


<b>Output:</b>
33
</pre><p>
<b>Explanation:</b><br />
The sinking time of all the sectors for this example are:</p>
<pre>
17  15  12 16 21  27  33
  15  11   5   9  16  18
</pre><p>Hence the answer 33.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/uploader0">uploader0</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
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