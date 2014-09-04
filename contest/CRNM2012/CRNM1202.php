<?php require("../../includes/header.php"); ?><h1>The Two Little Sisters</h1><div class="content">

<p style="font-size:13px" align="justify"><b>Sak</b> and <b>Pre</b> are the two little sisters :) They love to play games with each other. Yesterday, Pre was stumbling online and she came across a new game called &ldquo;Stone-Queen&rdquo;. She immediately told about it to Sak, so she could play it with her. Stone-Queen is a two player game.<br />
The game starts with a pile of stones. Each player on his turn can subtract a &ldquo;queen&rdquo; number of stones from the pile and the subtracted stones are discarded from the game. A queen number is defined as a number which is either a prime or it has exactly two distinct prime factors. The loser is the player who cannot make a move.<br />
Sak is very intelligent, she figured out the winning strategy after a number of plays. But Pre is not able to figure out the winning strategy and so she is losing every time. Can you help Pre find out who wins the game given the initial number of stones <b>N</b> in the pile? Assume that both players play optimally</p>
<h3>Input</h3>
<p style="font-size:13px">First line contains <b>T</b>, the number of test cases.<br />
Next T lines contains T test cases, each of which is in the form of <b>first_player N</b>&rdquo;, where <b>first_player</b> stands for the player who starts the game and <b>N</b> represents the number of stones in pile initially.</p>
<h3>Output</h3>
<p style="font-size:13px">Output T lines, each containing the name of player who wins the game.</p>
<h3>Constraints</h3>
<p style="font-size:13px">1&lt;=N&lt;=100000<br /><br />
1&lt;=T&lt;=10000</p>
<h3>Example</h3>
<pre style="font-size:13px">
<b>Input:</b>
3
Sak 3
Pre 1
Pre 4


<b>Output:</b>
Sak
Sak
Pre
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhidce2013">abhidce2013</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2012</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>