<?php require("../../includes/header.php"); ?><h1>Music Mania</h1><div class="content">
<p> </p>
<p>You are a huge music fan! And you're a programming freak , too. So you've decided to create an application called "Music Mania" . "Music Mania"  predicts the user's most played song as well as the number of songs he plays in a month, on the basis of his taste for music.</p>
<p>
Here is what you've planned out:<br />
You will ask the users for their Top 3 favourite music genres and Top 3 Favourite Bands. Then you'll ask them to input an arbitrary number of songs. According to your algorithm, the user is twice as likely to play songs from his/her favourite bands/artists. Similarly, he is twice as likely to play songs from his/her favorite genres. On the basis of the songs that have been entered, your program will calculate the expected number of times the "least played" song was played. Then using probability, the program will calculate the total number of songs played in the month.
</p>
<p>
The procedure used by the program to calculate the number of times the "least played" song was played:<br />
Suppose the user entered N songs, each song having a probability of being played p(1),p(2),...p(N) respectively. Let LP denote the number of times the "least played" song was played. Now, the formula for the expected value of LP : <br /><br /><br />
<b>LP = 1*p(N) + 2*p(N-1) + 3*p(N-2) + ...... + i*p(1) / p(1) + p(2) + p(3) + ... + p(N)</b>
</p>
<p>
Your task is to convert the above mentioned technique into a program.
</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>T</b>.<br /> <b>T</b> Test cases follow.<br /><br />
For every test case, the first line is the list of the user's 3 favourite genres, which will be 3 space seperated strings. <br /><br />
The next line will contain names of his/her 3 favourite bands/artists which is again a space separated list.<br /><br />
Next line will contain the number of songs 'S' that the user wishes to enter. <br /><br />
<br />The next S lines will each contain 3 space seperated strings, in this format :<br /><br />
<br /><br />
<b>ArtistName SongName Genre</b><br /><br />
<br /><br />
Please note that the entered strings DO NOT HAVE SPACES inside them.<br />
<br />For example, the band "Pink Floyd" will be entered as "PinkFloyd".<br /></p>
<p>Refer to the sample test cases below.
</p>
<h3>Output</h3>
<p>The sum of number of times each song was played in a month (an integral value) and the name of the most played song. In case multiple songs were played the same number of times, output the song that was entered first in the input for the test case.</p>
<h3>Constraints</h3>
<p><b>0</b> &lt; <b>N</b> &lt; <b> 1000000</b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
Psychedelic Progressive Classic
PinkFloyd TheDoors TheBeatles
5
PinkFloyd Time Progressive
TheDoors TheEnd Psychedelic
TheBeatles LetItBe Pop
MGMT Whistle Psychedelic
LinkinPark InTheEnd AltRock
HeavyMetal DeathMetal BlackMetal
Metallica ChildrenofBodom CradleofFilth
0
Jazz Blues Bollywood
JohnMayer AmitTrivedi DireStraits
2
LinkinPark GivenUp Rock
IronMaiden RunToTheHills NWOBHM

<b>Output:</b>
47 Time
0  
3 GivenUp
</pre><h3>Explanation</h3>
<p><b>Explanation for Sample Case 1 : </b><br /> Direct Method:<br />
Lets assume that a song that is least played has a probability of being played equal to 'p'.<br />
The song "Time" is from his favourite band, "PinkFloyd" and also from his favourite genre "Progressive". So it has 2*2p = 4p probablity of being played.<br />
Similarly, "TheEnd" also has 4p as the probability of being played.<br />
"LetItBe" is from his favourite band, thus has a probablity 2p of being played.<br />
"Whistle" too has a probability 2p of being played.<br />
"InTheEnd" has p probability of being played.<br />
After calculation, the value of p = 0.07692<br />
After further calculations, the sum of number of times each song was played comes out to be 47.
</p>
<p><b>Explanation for Sample Case 2 : </b><br /></p>
<p>There are 0 songs entered.<br />
Hence, the output is 0 and a space character.
</p>
<p>
<b>Explanation for Sample Case 3 : </b><br /><br />
Both the songs entered are not from the user's favourite band/genre. Thus both are equally likely to be played with p(1) = 0.5 and p(2)=0.5<br />
Thus the number of times the "least played" will be played 1.5.<br />
Hence, the sum of number of times each song was played in the month = 1.5 + 1.5 = 3.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashmew2">ashmew2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.4 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>