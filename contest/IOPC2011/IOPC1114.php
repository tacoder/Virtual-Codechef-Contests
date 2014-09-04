<?php require("../../includes/header.php"); ?><h1>Place-name game</h1><div class="content">

<p>Place-name game is a favourite pastime among the few children that go to school in Dystopia. The game is played as follows : One player says the name of a city and the next player has to say the name of a city that begins with the last letter of the said city. The game then goes on.</p>
<p>Dystopian cities recently went through a massive renaming. Now each city has a name that begins with a consonant and ends with a consonant.</p>
<p>Anaximander is a student with a very poor knowledge of geography. Hence he fares very poorly in the game. He has recently come up with a new idea. He would just remember the name of 21 Dystopian cities. He wants to choose the 21 cities such that there is exactly one city name starting with each consonant and exactly one city name ending with each. This would give him a good advantage in the game, whether he is playing first or second.</p>
<p>Given the names of the N cities in Dystopia, find out the number of ways Anaximander can select 21 city names out of the lot satisfying the properties. As this number can be very large, output it modulo 100000007.</p>
<h3>Input</h3>

<p>The first line of the input contains N (≤1000), the number of cities. This is followed by N lines, each containing the name of a city in Dystopia. Each city name will begin and end with a consonant, and will contain at least 2 and at most 10 letters.</p>
<h3>Output</h3>

<p>Output modulo 100000007 the number of ways Anaximander can choose 21 city names out of the N with the intended properties.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
23
BBBB
CCCC
DDDD
FFFF
GGGG
HHHH
JJJJ
KKKK
LLLL
MMMM
NNNN
PPPP
QQQQ
RRRR
SSSS
TTTT
VVVV
WWWW
XXXX
YYYY
ZZZZ
BAAC
CAAB

<b>Output:</b>
2
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2011</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>