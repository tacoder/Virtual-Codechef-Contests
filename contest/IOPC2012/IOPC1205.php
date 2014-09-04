<?php require("../../includes/header.php"); ?><h1>The magical escape</h1><div class="content">

<p align="justify">The nasty king of Dystopia has captured a group of travellers from Utopia. The king wants to toy with them, so he makes them play a little "game":</p>
<p align="justify">The king will place everyone in solitary confinement. He has placed a bulb in a separate room which is controlled by a switch. Initially the bulb is off. Each day he picks a prisoner at random and takes him to the room. He can see whether the bulb is on or not, and choose whether to toggle the state of the bulb. This continues day after day. Now the king says that, once a prisoner realises that all of them have visited the special room at least once, he can convey it to the king and he will set everyone free. However, if someone makes such a claim wrongly, everyone will be executed. Before locking everyone up, the king would allow all prisoners to get together and decide a strategy.</p>
<p align="justify">This would usually be a very diabolic game to play - However, among the prisoners there were some magicians who could communicate with each other telepathically. So they come up with this strategy. All magicians start counting from 0. Every time a non-magician who has never toggled the state of the bulb before enters the room and finds the lamp off, he turns it on. However if he finds it on already, or if he has toggled the state of the bulb before, he leaves it as is. Whenever a magician enters the room, he does the following:</p>
<ul>
<li>If he is entering the room for the first time, he increases his counter by 1 and telepathically communicates this to all other magicians who update their counter as well.</li>
<p></p>
<li>If he finds the lamp on, whether or not he is a first timer, he turns it off and all magicians increase their counter by one.</li>
</ul>

<p align="justify">Finally when the magicians' counter reaches the total number of prisoners, they declare that everyone has been in the room at least once.</p>
<p align="justify">Find the expected number of days that pass before this declaration occurs.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 100). Following these are T lines corresponding to the test cases. Each line will contain two space separated integers N &amp; M, the total number of prisoners and the number of magicians among them respectively (1 ≤ N ≤ 10<sup>9</sup>, 1 ≤ M ≤ min(100,N))</p>
<h3>Output</h3>
<p align="justify">For each test case, output the expected number of days before the magicians declare that all prisoners have entered the room at least once. The output has to be formatted in the following fashion: #.######E+## That is, one nonzero digit before the decimal point, six digits after the decimal point and two digits for the exponent. See the sample test case for a formatting example.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
100 10
1 1

<b>Output:</b>
1.408258E+03
1.000000E+00
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>