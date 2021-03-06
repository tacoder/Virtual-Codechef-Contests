<?php require("../../includes/header.php"); ?><h1>Presti Digitator</h1><div class="content">

<p style="text-align:justify">Presti Digitator, the world-famous magician, is highly dissatisfied with his way of shuffling cards. Just yesterday, a perky guy in the audience demanded that he shuffle the cards once again, and he was aghast to see that the bottom card had not changed. Even though Mr. Digitator pacified the crowd with a few excellent tricks, the whole experience left him sad. He thinks that his shuffling leaves too many cards unchanged. He has decided to return to the drawing board, and retrain himself.</p>
<p style="text-align:justify">He thinks that a "good" shuffle should leave no card in its old position. Assume that cards are numbered sequentially starting from 1. For example, if there are 4 cards initially arranged in the order 1,2,3,4, a shuffle of 2,3,4,1 would be considered good, while 3,2,1,4 would be bad since 2 and 4 are unchanged in the shuffled order. Digitator wonders whether good shuffles are rare - he would like to know, how many good shuffles of a given deck of cards there are.</p>
<h3>Input</h3>
<p style="text-align:justify">For this question, you are given a series of numbers on distinct lines. The first line contains a number (let’s call it n) denotes how many decks there are to shuffle.</p>
<p style="text-align:justify">This is followed by n lines, each containing a positive number less than or equal to 20. Each such number denotes the number of cards in that deck.</p>
<h3>Output</h3>
<p style="text-align:justify">The output should have several lines. The i-th line is the number of good shuffles for the number of cards described in the i-th line. The output will fit inside a 64-bit integer.</p>
<h3>SampleInput</h3>
<pre>
2
2
4

</pre><h3>Sample Output</h3>
<pre>
1
9

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shilp_adm">shilp_adm</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>