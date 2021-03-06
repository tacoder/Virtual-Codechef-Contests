<?php require("../../includes/header.php"); ?><h1>Socializing Game around Pizza</h1><div class="content">

<p align="justify">Did you know that the people of America eat around 100 acres of pizza per day ? Having read this fact on internet, two chefs from the Elephant city, Arjuna and Bhima are set to make pizza popular in India. They organized a social awareness camp, where <b>N</b> people ( other than these two ) sit around a large pizza. To make it more interesting, they make some pairs among these N people and the two persons in a pair, feed each other.
</p>
<p align="justify">Each person should be a part of at most one pair and most importantly, to make feeding easy, any two pairs should not cross each other ( see figure for more clarity ). Arjuna and Bhima decided to play a game on making the pairs. In his turn, a player makes a pair ( selects two persons, as long as its valid ) and this pair start feeding each other. Arjuna and Bhima take turns alternately, by making a pair in each turn, and they  play optimally ( see Notes for more clarity ). The one who can not make a pair in his turn, loses. Given N, find who wins the game, if Arjuna starts first. <br />
<img src="http://farm6.static.flickr.com/5142/5702697471_007b748139.jpg" width="500" height="213" /></p>
<h3>Notes</h3>
<ul>
<li>'Optimally' means, if there is a possible move a person can take in his turn that can make him win finally, he will always take that. You can assume both are very intelligent. </li>
</ul>
<p></p>
<h3>Input</h3>

<p>First line contains an integer T ( number of test cases, around 1000 ). Each of the next T lines contains an integer N ( 2 &lt;= N &lt;= 10000 )</p>
<h3>Output</h3>

<p>For each test case, output the name of the winner ( either "Arjuna" or "Bhima" ( without quotes ) ) in a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
4
5
6

<b>Output:</b>
Arjuna
Arjuna
Bhima
Arjuna
</pre><p>
<b>Explanation:</b></p>
<p>Let the people around the table are numbered 1, 2, ... , N in clock-wise order as shown in the image </p>
<p>Case 1 : N = 2. Only two persons and Arjuna makes the only possible pair (1,2)</p>
<p>Case 2 : N = 4. Arjuna can make the pair (1,3). Bhima can not make any more pairs ( without crossing the pair (1,3) )</p>
<p>Case 3 : N = 5. No matter which pair Arjuna makes first, Bhima can always make one more pair, and Arjuna can not make any further</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-05-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>