<?php require("../../includes/header.php"); ?><h1>Game of Prime</h1><div class="content">

<p>
Mike and Joe are best friends. They were so busy in their work and hardly get anytime to play.<br />
They met Once on a Sunday afternoon and try to invent a new game - Game of Prime.<br />
They made Simple Rules so that every one can play easily.
</p>
<p>
Rule 1 : Two number are randomly taken by a device made to generate random numbers (A, B).<br />
Rule 2 : A new random number is taken ( C ). <br />
Winner : The player who tells the Cth Prime number between A and B (excluding A and B ) taken in Circular Queue will win the game.
</p>
<p>
You're task is not to help any player but to help the checker machine by providing the correct result.
</p>
<h3>Input</h3>
<p>
First line will give the number of Test Cases( T &lt;= 1000 ). Each Test Case will be followed by the description given above.
</p>
<h3>Output</h3>
<p>
For each Test Case provide the desired output in a single line. If no prime number exist provide -1 as result.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1 10
3
5 3
154
3 300
40
34400 44000
10
4 2
1

<b>Output:</b>
5
-1
181
34499
3

</pre><h3> Constraints </h3>
<pre>
0 &lt; A, B &lt;= 10^5
0 &lt; C &lt;= 10^5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-11-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>