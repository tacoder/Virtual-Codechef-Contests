<?php require("../../includes/header.php"); ?><h1>Rich Rhyme</h1><div class="content">
<p>In the land of Rhyme, the King and his people always speak in rhymes. They are so accustomed in conversing using rhymes that at one point it became monotonous. So what was once a source of happiness and amusement is now creating a strange emotion within the heart of the people. The productivity of the people has become less and more importantly, the happiness index of the land has plummeted. The experts have investigated the whole matter and reported that speaking in rhyme is not the problem; it is the monotony of the same thing that is affecting the people. In fact they suggested changing the definition of rhyme slightly. One of their recommendations is to introduce a new concept of "richness" in a sentence.
</p>
<p>A sentence would be termed rich if it starts and ends with the same word! The King seems to like this definition. But he is finding it difficult to even say a simple meaningful sentence that is "rich".  The King became quite anxious. Your boss, King’s ICT adviser, suggested that a competition among the general people should be thrown where the participants would have to submit a piece (story/poem/essay etc.) full of rich sentences. Then the richest pieces would be judged and be awarded.  The King made a decree accordingly. Your boss was ordered to formulate a judging scheme for the pieces and write a program immediately to do the judgment. And as usual he formulated something and asked you to implement that. What he has asked you to do is as follows. You will take as input a piece as a character array. And output another array where each position will give the richness of the piece up to that position.
</p>
<p>“What is richness?” You asked.
</p>
<p>Your boss replied, “The richness is the size of the identical proper substring which is present at the beginning and at the end of the piece. But, the complete string cannot be considered as its substring.”
</p>
<p>“But you said to calculate the richness at each position”! You inquired.
</p>
<p>“Yes, of course! When you calculate up to a position, you will have to assume that the piece ends at that position.” Your boss smiled. He seemed to be quite happy in formulating this.
</p>
<p>You asked again, "Don't I need to think about the word boundaries?"
</p>
<p>“Not now, my son. We will think about it later. Do it without considering word boundaries for now. You will consider the input character by character”. He assured you. He seemed all the more content with his own formulation and probably was not seeing the possible pitfalls. He continued, "And one other point; richness of the first position would always be 0."
</p>
<p>Meaningful, you thought. But you had to ask a final question. “How would you then finally compute the richness of the total piece using all these information? What will be the formula?”
</p>
<p>Your boss seemed perplexed. He did not think this through, as it seemed. So, he said, “You need not worry about that. Do as I said. Just remember that the input size could be quite large.”
</p>
<p>You knew that you have to stop asking and start coding now. “Yes, boss!” you said. You also realized the implication of the last direction of your boss. Few years back there was another competition on literary works. And the size of some pieces was 4 million characters!
</p>
<h3>Input</h3>
<p>Input consists of several lines. Each line contains a string of lowercase English letters. End of input is indicated by a line containing the string “End”. No output line should be produced for this line.
</p>
<h3>Output</h3>
<p>For each input line, you must output a line containing several integers, separated by space. The number of integers must be same as the length of the input string. The Integer at a specific position must represent the richness of the input string up to that position. There must not be any trailing space in any output line.
</p>
<h3>Constraints</h3>
<p>The total length of input is less than 4 * 10^6</p>
<h3>Example</h3>
<pre><b>Input:</b>
oebmgoca
bdblhc
jgojeqp
atofpgrwk
fdcdd
ababbacdbacdbacd
dacc
cbda
accb
dcbb
dacbbcbcbcbcdcbbbcbcbcbcbcbcdacbbcbcdcbbbcbcdcbbdcbb
End


<b>Output:</b>
0 0 0 0 0 1 0 0
0 0 1 0 0 0
0 0 0 1 0 0 0
0 0 0 0 0 0 0 0 0
0 0 0 0 0
0 0 1 2 0 1 0 0 0 1 0 0 0 1 0 0
0 0 0 0
0 0 0 0
0 0 0 0
0 0 0 0
0 0 0 0 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 2 3 4 5 6 7 8 1 0 0 0 0 0 0 0 1 0 0 0 1 0 0 0
</pre>
<p><b>
<p>Problem Setter : Dr. M Sohel Rahman</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-12-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>