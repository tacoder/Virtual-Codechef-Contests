<?php require("../../includes/header.php"); ?><h1>Evil Island</h1><div class="content">

<p>
The earth is in terror. The great villain scientist Dr. Jayden in his amibition to rule the earth, was successful to find a method to convert humans into cannibals. Now he is creating his army of cannibals in an island known as <b>Evil Island.</b></p>
<p>A group of Navy seals in leadership of Captian Smith decided to capture the island before army of Dr. Jayden take any destructive step. The Navy reached the island and fortunately at that time, <b>the cannibals were half in count as that of soldiers</b>.<br />Captain Smith orders his men to form up and take on the cannibals. But before they could, they hear a loudspeaker - "Don't even think about taking them on, Captain Smith"- it was the scientist Dr. Jayden, "I have a rail-gun programmed to kill all of your men if you kill a single cannibal now. You see, I would like to play a game with you. I have instructed the cannibals to obey you as you command your men and my cannibals to form up in a single line. After that I will drop a cage that divides the line. This cage will trap people either from beginning or from end of the line, and they(people in cage) will fight till the death. If your men win, my railgun will kill all remaining cannibals. If they lose then you won't be able to return from here." <br />Now, Capt. Smith is confident that his men will be able to kill the cannibals as long as the cannibals do not exceed the men in the cage. In how many ways can Capt. Smith arrange his men and the cannibals so that victory is ensured and the earth can be saved from this impending destruction?</p>
<h3>Input</h3>
<p>A integer T containing number of test cases followed by T lines each containing a integer which is number of cannibals.</p>
<p> 1 ≤ T ≤ 100 and number of cannibals ≤10000</p>
<h3>Output</h3>
<p>For each test case, output in different lines, number of ways of arranging the soldiers and cannibals in a line MODULUS 10^9+7.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2

<b>Output:</b>
4

<b>Explanation:</b>
In only test case, there are 2 cannibals so 4 soldiers.<br />
Let C denote cannibal and S soldiers. One possible arrangement is<br />
SCSCSS 
If cage covers any K (1 &lt;= K &lt;= 6) people from beginning, numbers of cannibals don't exced number of <br />soldiers hence soldiers will win. Similarly from the end.

A wrong  arrangement is<br /> SCCSSS <br />
If cage covers 3 people from starting, cage will contain a soldier and two cannibals and cannibals would win.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitpandeykgp">amitpandeykgp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>